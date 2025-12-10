<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dvp_auditoria', function (Blueprint $table) {
            $table->id();
            $table->string('codbarras', 20)->nullable();
            $table->string('descricao', 200)->nullable();
            $table->string('caractrib', 5)->nullable();
            $table->string('atividade', 50)->nullable();
            $table->string('codimendes', 20)->nullable();
            $table->string('codgroup', 20)->nullable();
            $table->string('dtvigini', 20)->nullable();
            $table->string('dtvigfin', 20)->nullable();
            $table->string('dtvigencia', 20)->nullable();
            $table->string('pis_ncm', 20)->nullable();
            $table->string('pis_cest', 20)->nullable();
            $table->string('pis_cestdesc', 200)->nullable();
            $table->string('pis_cstent', 10)->nullable();
            $table->string('pis_cstsai', 10)->nullable();
            $table->decimal('pis_aliqpis', 10, 2)->nullable();
            $table->decimal('pis_aliqcofins', 10, 2)->nullable();
            $table->string('pis_natrec', 20)->nullable();
            $table->string('pis_natrecdesc', 200)->nullable();
            $table->string('pis_codanp', 20)->nullable();
            $table->string('pis_amplegal', 200)->nullable();
            $table->string('pis_pmc', 50)->nullable();

            $table->string('ipi_cstent', 10)->nullable();
            $table->string('ipi_cstsai', 10)->nullable();
            $table->decimal('ipi_aliqipi', 10, 2)->nullable();
            $table->string('ipi_codenq', 10)->nullable();
            $table->string('ipi_ex', 10)->nullable();
            $table->string('ipi_descritipi', 200)->nullable();

            $table->integer('icms_codregra')->nullable();
            $table->integer('icms_codexcecao')->nullable();
            $table->string('icms_uf', 5)->nullable();
            $table->string('icms_cstcsosn', 10)->nullable();
            $table->decimal('icms_aliqicms', 10, 2)->nullable();
            $table->decimal('icms_aliqicmscred', 10, 2)->nullable();
            $table->decimal('icms_redbcicms', 10, 2)->nullable();
            $table->decimal('icms_redbcicmsst', 10, 2)->nullable();
            $table->decimal('icms_aliqicmsst', 10, 2)->nullable();
            $table->decimal('icms_iva', 10, 2)->nullable();
            $table->decimal('icms_fcp', 10, 2)->nullable();
            $table->string('icms_codbenef', 50)->nullable();
            $table->decimal('icms_percdifer', 10, 2)->nullable();
            $table->string('icms_isento', 5)->nullable();
            $table->decimal('icms_pisencao', 10, 2)->nullable();
            $table->string('icms_antecipado', 5)->nullable();
            $table->string('icms_desonerado', 5)->nullable();
            $table->decimal('icms_aliqdeson', 10, 2)->nullable();
            $table->integer('icms_excecao')->nullable();
            $table->string('icms_cfop', 50)->nullable();
            $table->string('icms_dtvigini', 20)->nullable();
            $table->string('icms_dtvigfin', 20)->nullable();
            $table->text('icms_lawg_desc')->nullable();

            $table->string('ibs_cclasstrib', 20)->nullable();
            $table->string('ibs_descrclasstrib', 200)->nullable();
            $table->string('ibs_cst', 10)->nullable();
            $table->string('ibs_descrcst', 200)->nullable();
            $table->decimal('ibs_ibsuf', 10, 2)->nullable();
            $table->decimal('ibs_ibsmun', 10, 2)->nullable();
            $table->decimal('ibs_reducaoaliq', 10, 2)->nullable();
            $table->decimal('ibs_reducaobc', 10, 2)->nullable();
            $table->string('ibs_amplegal', 200)->nullable();
            $table->string('ibs_dtvigini', 20)->nullable();
            $table->string('ibs_dtvigfin', 20)->nullable();

            $table->string('cbs_cclasstrib', 20)->nullable();
            $table->string('cbs_descrclasstrib', 200)->nullable();
            $table->string('cbs_cst', 10)->nullable();
            $table->string('cbs_descrcst', 200)->nullable();
            $table->decimal('cbs_aliquota', 10, 2)->nullable();
            $table->decimal('cbs_reducao', 10, 2)->nullable();
            $table->decimal('cbs_reducaobc', 10, 2)->nullable();
            $table->string('cbs_amplegal', 200)->nullable();
            $table->string('cbs_dtvigini', 20)->nullable();
            $table->string('cbs_dtvigfin', 20)->nullable();

            $table->decimal('pdv_aliqicmspdv', 10, 2)->nullable();
            $table->string('pdv_simbpdv', 10)->nullable();
            $table->string('pdv_cstcsosn', 10)->nullable();
            $table->decimal('pdv_aliqicmsint', 10, 2)->nullable();
            $table->string('pdv_cstent', 10)->nullable();
            $table->string('pdv_cstsai', 10)->nullable();
            $table->decimal('pdv_aliqpis', 10, 2)->nullable();
            $table->decimal('pdv_aliqcofins', 10, 2)->nullable();

            $table->string('pis_ncm_srvc', 20)->nullable();
            $table->string('pis_cest_srvc', 20)->nullable();
            $table->integer('pis_cod_retorno_srvc')->nullable();

            $table->timestamp('data_insercao')->useCurrent();
            $table->string('status_processo', 20)->nullable();
            $table->string('origem', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dvp_auditoria');
    }
};
