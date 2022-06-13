<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;


use Livewire\Component;
use  App\Models\Reporte;
use App\Models\Transversalidad;

class CReportes extends Component
{
    public function render(Request $request)
    {

        $transversalidades= Transversalidad::all();
        return view('livewire.c-reportes',['transversalidades'=> $transversalidades,

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
