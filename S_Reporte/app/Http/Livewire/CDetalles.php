<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;

class CDetalles extends Component
{
    public function render(Request $request)
    {
        $a=$request->id;
       


        return view('livewire.c-detalles',[
            'id'=> $a,
        ]);
    }
}
