<?php

namespace App\Http\Controllers;
use  App\Models\Reporte;
use  App\Models\Transversalidad;

use Illuminate\Http\Request;


class ReportController extends Controller
{
     public function store(Request $request)
    {
        $user=auth()->user()->id;

        $reporte = new Reporte;
        $reporte->fuente = $request->fuente;
        $reporte->user_id = auth()->user()->id;
        $reporte->fecha=$request->fecha;
        $reporte->n_situacion=$request->n_situacion;
        $reporte->transversalidad=$request->transversalidad;
        $reporte->metadato=$request->metadato;
        $reporte->evento=$request->metadato;
        $reporte->tema_selecto=$request->tema_selecto;
        $reporte->reseña=$request->reseña;
        $reporte->proceso_validacion=$request->proceso_validacion;



        $reporte->save();
        $id=$reporte->id;

        return redirect()->route('cdetalles', ['id' => $id]);
    }
    public function update(Request $request){
        $reporte = Reporte::find($request->id);
        $transversalidades= Transversalidad::all();

        return view ('ereport',compact('reporte','transversalidades'));
    }
    public function edit(Request $request){
        $reporte = Reporte::find($request->id);
        $reporte->fuente = $request->fuente;
        $reporte->user_id = auth()->user()->id;
        $reporte->fecha=$request->fecha;
        $reporte->n_situacion=$request->n_situacion;
        $reporte->transversalidad=$request->transversalidad;
        $reporte->metadato=$request->metadato;
        $reporte->evento=$request->metadato;
        $reporte->tema_selecto=$request->tema_selecto;
        $reporte->reseña=$request->reseña;
        $reporte->proceso_validacion=$request->proceso_validacion;


        $reporte->save();
        return redirect()->route('reportes', );

    }
    public function destroy(Request $request)
    {
        $reporte = Reporte::find($request->id);
        $reporte->delete();

        return redirect()->route('reportes',);
    }



}
