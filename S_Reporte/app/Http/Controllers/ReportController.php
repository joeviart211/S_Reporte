<?php

namespace App\Http\Controllers;
use  App\Models\Reporte;

use Illuminate\Http\Request;


class ReportController extends Controller
{
     public function store(Request $request)
    {
        $user=auth()->user()->id;

        $reporte = new Reporte;
        $reporte->fuente = $request->fuente;
        $reporte->user_id = auth()->user()->id;;
        $reporte->fecha=$request->fecha;
        $reporte->n_situacion=$request->n_situacion;
        $reporte->transversalidad=$request->transversalidad;

        $reporte->save();
        $id=$reporte->id;

        return redirect()->route('cdetalles', ['id' => $id]);
    }
}
