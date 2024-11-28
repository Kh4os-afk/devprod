<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Licenca */
class LicencaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'empresa' => $this->empresa,
            'cnpj' => $this->cnpj,
            'contato' => $this->contato,
            'dtinicio' => $this->dtinicio,
            'dtfinal' => $this->dtfinal,
            'qtfilial' => $this->qtfilial,
            'vlmensal' => $this->vlmensal,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
