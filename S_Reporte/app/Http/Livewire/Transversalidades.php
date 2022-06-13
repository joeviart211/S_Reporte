<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transversalidad;

class Transversalidades extends Component
{
    public function render()
    {
        $transversalidades= Transversalidad::all();
        return view('livewire.transversalidades',[

            'transversalidades'=> $transversalidades,
        ]);
    }
}
