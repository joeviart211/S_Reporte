<?php

namespace App\Http\Livewire;
use App\Models\Detalle;
use Livewire\Component;

class Detail extends Component
{

    public function render()
    {
        $actual_link = "$_SERVER[REQUEST_URI]";
        $ident=substr($actual_link, 10);

        $detalles= Detalle::where('id',$ident)->get();
        //dd($detalles);

        return view('livewire.Detail',[
            'detalles'=>$detalles,
            'ident'=>$ident
        ]
    );
    }
}
