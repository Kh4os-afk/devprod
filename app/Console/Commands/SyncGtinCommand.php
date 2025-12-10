<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use App\Models\DvpAuditoria;
use Illuminate\Support\Str;

class SyncGtinCommand extends Command
{
    protected $signature = 'sync:gtin';
    protected $description = 'Reconsulta GTINs existentes cuja data_eauditoria passou de 7 dias.';

    public function handle()
    {
        $lock = Cache::lock('sync-gtin-lock', 600);

        if (!$lock->get()) {
            $this->info('⚠️ Já existe uma sincronização em andamento.');
            Log::info('⚠️ Já existe uma sincronização em andamento.');
            return Command::SUCCESS;
        }

        $this->info('🔄 Iniciando revisão de GTIN (somente registros existentes)...');
        Log::info('🔄 Iniciando revisão de GTIN (somente registros existentes)...');

        try {
            // ---------------------------------------------
            // 🔍 BUSCA SOMENTE REGISTROS EXISTENTES COM +7 DIAS
            // ---------------------------------------------
            $produtos = DvpAuditoria::where(function ($q) {
                $q->whereNull('data_eauditoria')
                    ->orWhere('data_eauditoria', '<=', now()->subDays(7));
            })
                ->whereNull('erro_eauditoria')
                ->limit(1000)
                ->get();

            $total = $produtos->count();

            if ($total === 0) {
                $this->info("⏳ Nenhum GTIN com mais de 7 dias para revisar.");
                Log::info("⏳ Nenhum GTIN com mais de 7 dias para revisar.");
                return Command::SUCCESS;
            }

            $this->info("📦 Reprocessando lote de {$total} GTINs...");
            Log::info("📦 Reprocessando lote de {$total} GTINs...");

            $payload = $produtos->pluck('codbarras')
                ->filter()
                ->map(fn($c) => ['code' => trim($c)])
                ->toArray();

            // ---------------------------------------------
            // 🔥 CONSULTA API IMENDES
            // ---------------------------------------------
            $response = Http::timeout(300)
                ->withHeaders([
                    'accept' => 'application/json, text/plain, */*',
                    'content-type' => 'application/json',
                    'email' => 'admin@e-auditoria.com.br',
                    'origem' => 'portal',
                    'origin' => 'https://regrasfiscais.e-auditoria.com.br',
                    'tokensession' => 'r2Dqru0vgMWi8mx8exHfO1MWbpjtNMpfhB2K6YUnrKlyrIaQuJ+Krk4bxI6QH0hP',
                    'userid' => '2297',
                ])->post('https://consultatributos.e-auditoria.com.br:8443/portal_imendes/v1/public/Consult', [
                    'header' => [
                        "clientStatus" => "N",
                        "clientCnpjCpf" => "10750188000149",
                        "userID" => 2297,
                        "method" => "GTCONSULTA_INDIVIDUAL",
                        "requestSource" => "PORTAL",
                        "userLogged" => "true",
                        "consultType" => 1,
                        "batch" => false,
                        "validity" => now()->format('Y-m-d'),
                        "email" => "admin@e-auditoria.com.br",
                        "company" => "IMENDES",
                        "emailExport" => "admin@e-auditoria.com.br",
                        "token" => "r2Dqru0vgMWi8mx8exHfO+na8g4lj8qllj3nDzAUX6c=",
                        "uf" => "AM",
                        "taxRegimeType" => 1,
                        "taxRegime" => 1,
                        "activity" => "VAREJO",
                    ],
                    'products' => $payload,
                ]);

            if (!$response->successful()) {
                Log::error("❌ Erro API: " . $response->body());
                return Command::SUCCESS;
            }

            $data = $response->json();

            if (!isset($data['products'])) {
                Log::error("❌ API retornou formato inesperado");
                return Command::SUCCESS;
            }

            // ---------------------------------------------
            // 🔁 PERCORRE RESPOSTA E ATUALIZA CADA ITEM
            // ---------------------------------------------
            foreach ($data['products'] as $produto) {

                $ean = $produto['codBarras'] ?? null;

                if (!$ean) {
                    Log::warning("⚠️ Produto sem GTIN na resposta da API.");
                    continue;
                }

                $ean = ltrim($ean, '0');

                $linha = DvpAuditoria::whereRaw("TRIM(LEADING '0' FROM codbarras) = ?", [$ean])->first();

                if (!$linha) {
                    Log::warning("⚠️ GTIN {$ean} não encontrado na base local.");
                    continue;
                }

                try {
                    $linha->update([
                        // ⚠️ TODOS OS CAMPOS DO SEU INSERT ORIGINAL ESTÃO AQUI
                        'codbarras' => $ean ?? null,
                        'descricao' => $produto['descricao'] ?? null,
                        'caractrib' => $produto['caracTrib'] ?? null,
                        'atividade' => $produto['atividade'] ?? null,
                        'codimendes' => $produto['codImendes'] ?? null,
                        'codgroup' => $produto['codGroup'] ?? null,
                        'dtvigini' => $produto['dtVigIni'] ?? null,
                        'dtvigfin' => $produto['dtVigFin'] ?? null,
                        'dtvigencia' => $produto['dtVigencia'] ?? null,

                        // PIS/COFINS
                        'pis_ncm' => $produto['pisCofins']['ncm'] ?? null,
                        'pis_cest' => $produto['pisCofins']['cest'] ?? null,
                        'pis_cestdesc' => $produto['pisCofins']['cestDescription'] ?? null,
                        'pis_cstent' => $produto['pisCofins']['cstEnt'] ?? null,
                        'pis_cstsai' => $produto['pisCofins']['cstSai'] ?? null,
                        'pis_aliqpis' => $produto['pisCofins']['aliqPis'] ?? null,
                        'pis_aliqcofins' => $produto['pisCofins']['aliqCofins'] ?? null,
                        'pis_natrec' => $produto['pisCofins']['natRec'] ?? null,
                        'pis_natrecdesc' => $produto['pisCofins']['natRecDescription'] ?? null,
                        'pis_codanp' => $produto['pisCofins']['codAnp'] ?? null,
                        'pis_amplegal' => $produto['pisCofins']['amparoLegal'] ?? null,
                        'pis_pmc' => $produto['pisCofins']['pmc'] ?? null,

                        // IPI
                        'ipi_cstent' => $produto['ipi']['cstEnt'] ?? null,
                        'ipi_cstsai' => $produto['ipi']['cstSai'] ?? null,
                        'ipi_aliqipi' => $produto['ipi']['aliqIpi'] ?? null,
                        'ipi_codenq' => $produto['ipi']['codEnq'] ?? null,
                        'ipi_ex' => $produto['ipi']['ex'] ?? null,
                        'ipi_descritipi' => $produto['ipi']['descriTipi'] ?? null,

                        // ICMS
                        'icms_codregra' => $produto['icms']['codRegra'] ?? null,
                        'icms_codexcecao' => $produto['icms']['codExcecao'] ?? null,
                        'icms_uf' => $produto['icms']['uf'] ?? null,
                        'icms_cstcsosn' => $produto['icms']['cstCsosn'] ?? null,
                        'icms_aliqicms' => $produto['icms']['aliqIcms'] ?? null,
                        'icms_aliqicmscred' => $produto['icms']['aliqIcmsCredito'] ?? null,
                        'icms_redbcicms' => $produto['icms']['redBcIcms'] ?? null,
                        'icms_redbcicmsst' => $produto['icms']['redBcIcmsSt'] ?? null,
                        'icms_aliqicmsst' => $produto['icms']['aliqIcmsSt'] ?? null,
                        'icms_iva' => $produto['icms']['iva'] ?? null,
                        'icms_fcp' => $produto['icms']['fcp'] ?? null,
                        'icms_codbenef' => $produto['icms']['codBenef'] ?? null,
                        'icms_percdifer' => $produto['icms']['percDifer'] ?? null,
                        'icms_isento' => $produto['icms']['isento'] ?? null,
                        'icms_pisencao' => $produto['icms']['pIsencao'] ?? null,
                        'icms_antecipado' => $produto['icms']['antecipado'] ?? null,
                        'icms_desonerado' => $produto['icms']['desonerado'] ?? null,
                        'icms_aliqdeson' => $produto['icms']['aliqDesonerado'] ?? null,
                        'icms_excecao' => $produto['icms']['excecao'] ?? null,
                        'icms_cfop' => $produto['icms']['cfop'] ?? null,
                        'icms_dtvigini' => $produto['icms']['dtVigIni'] ?? null,
                        'icms_dtvigfin' => $produto['icms']['dtVigFin'] ?? null,
                        'icms_lawg_desc' => $produto['icms']['lawGrounds'][0]['description'] ?? null,

                        // IBS
                        'ibs_cclasstrib' => $produto['ibs']['cClassTrib'] ?? null,
                        'ibs_descrclasstrib' => $produto['ibs']['descrcClassTrib'] ?? null,
                        'ibs_cst' => $produto['ibs']['cst'] ?? null,
                        'ibs_descrcst' => $produto['ibs']['descrCST'] ?? null,
                        'ibs_ibsuf' => $produto['ibs']['ibsUF'] ?? null,
                        'ibs_ibsmun' => $produto['ibs']['ibsMun'] ?? null,
                        'ibs_reducaoaliq' => $produto['ibs']['reducaoaliqIBS'] ?? null,
                        'ibs_reducaobc' => $produto['ibs']['reducaoBcIBS'] ?? null,
                        'ibs_anexo' => $produto['ibs']['anexo'] ?? null,
                        'ibs_amplegal' => $produto['ibs']['ampLegal'] ?? null,
                        'ibs_dtvigini' => $produto['ibs']['dtVigIni'] ?? null,
                        'ibs_dtvigfin' => $produto['ibs']['dtVigFin'] ?? null,

                        // CBS
                        'cbs_cclasstrib' => $produto['cbs']['cClassTrib'] ?? null,
                        'cbs_descrclasstrib' => $produto['cbs']['descrcClassTrib'] ?? null,
                        'cbs_cst' => $produto['cbs']['cst'] ?? null,
                        'cbs_descrcst' => $produto['cbs']['descrCST'] ?? null,
                        'cbs_aliquota' => $produto['cbs']['aliquota'] ?? null,
                        'cbs_reducao' => $produto['cbs']['reducao'] ?? null,
                        'cbs_reducaobc' => $produto['cbs']['reducaoBcCBS'] ?? null,
                        'cbs_anexo' => $produto['cbs']['anexo'] ?? null,
                        'cbs_amplegal' => $produto['cbs']['ampLegal'] ?? null,
                        'cbs_dtvigini' => $produto['cbs']['dtVigIni'] ?? null,
                        'cbs_dtvigfin' => $produto['cbs']['dtVigFin'] ?? null,

                        // PDV
                        'pdv_aliqicmspdv' => $produto['pdv']['aliqIcmsPdv'] ?? null,
                        'pdv_simbpdv' => $produto['pdv']['simbPdv'] ?? null,
                        'pdv_cstcsosn' => $produto['pdv']['cstCsosn'] ?? null,
                        'pdv_aliqicmsint' => $produto['pdv']['aliqIcmsInterna'] ?? null,
                        'pdv_cstent' => $produto['pdv']['cstEnt'] ?? null,
                        'pdv_cstsai' => $produto['pdv']['cstSai'] ?? null,
                        'pdv_aliqpis' => $produto['pdv']['aliqPis'] ?? null,
                        'pdv_aliqcofins' => $produto['pdv']['aliqCofins'] ?? null,

                        // Atualiza data da auditoria
                        'data_eauditoria' => now(),
                        'erro_eauditoria' => null,
                    ]);

                } catch (\Throwable $e) {
                    try {
                        DvpAuditoria::whereRaw("TRIM(LEADING '0' FROM codbarras) = ?", [$ean])->update([
                            'erro_eauditoria' => $e->getMessage(),
                            'data_eauditoria' => now(),
                        ]);
                    } catch (\Exception $e) {
                        Log::error('Não foi possível registrar o erro na linha do GTIN ' . $ean . ': ' . $e->getMessage());
                    }

                    Log::error("⚠️ Erro ao atualizar GTIN {$ean}: " . $e->getMessage());
                }
            }

            $this->info("✅ Revisão concluída: {$total} produtos atualizados.");
            Log::info("✅ Revisão concluída: {$total} produtos atualizados.");

        } catch (\Throwable $e) {
            $this->error("💥 Erro: " . $e->getMessage());
            Log::error("💥 Erro geral no SyncGtin: " . $e->getMessage());
        } finally {
            $lock->release();
        }

        return Command::SUCCESS;
    }
}
