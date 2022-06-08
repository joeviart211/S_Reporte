<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;


use Livewire\Component;
use  App\Models\Reporte;

class CReportes extends Component
{
    public function render(Request $request)
    {
        
        return view('livewire.c-reportes',[

        ]);
    }
    public function store(Request $request){
        $reporte = new Reporte;
        //$reporte->fuente=$request->fuente;
        $reporte->user_id=auth()->user()->id;
        //$reporte->fecha=$request->fecha;
        //$reporte->n_sitiacion=$request->n_situacion;
        //$reporte->transversalidad=$request->transversalidad;
        $reporte->save();





    }

}
