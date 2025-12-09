<?php

namespace App\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $contagem = 0;
    public function contar($valor)
    {
        $this->contagem += $valor;
    }
    public function render()
    {
        return view('livewire.index');
    }
}
