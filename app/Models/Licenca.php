<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Licenca extends Model
{
    use HasUuids;

    protected $fillable = [
        'empresa',
        'cnpj',
        'contato',
        'dtinicio',
        'dtfinal',
        'qtfilial',
        'vlmensal',
    ];

    protected function casts()
    {
        return [
            'dtinicio' => 'date',
            'dtfinal' => 'date',
        ];
    }
}
