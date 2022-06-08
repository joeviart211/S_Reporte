<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Detalle;

class DetailController extends Controller
{
    public function store(Request $request)
    {



        $detail = new Detalle;
        $detail->id =$request->id;
        $detail->direccionG=$request->direccionG;
        $detail->direccionesWebG=$request->direccionesWebG;
        $detail->documentoDG=$request->documentoDG;
        $detail->direcciones_diagnostico=$request->direcciones_diagnostico;
        $detail->direccionesWebD=$request->direccionesWebD;
        $detail->direccion_proyecto=$request->direccion_proyecto;
        $detail->direccion_web_P=$request->direccion_web_P;
        $detail->documento_dd=$request->documento_dd;
        $detail->documento_DP=$request->documento_DP;
        $detail->direccion_planeacion=$request->direccion_planeacion;
        $detail->direccion_web_Pl=$request->direccion_web_Pl;
        $detail->documento_P=$request->documento_P;
        $detail->observaciones=$request->observaciones;
        $detail->tipo=$request->tipo;
        $detail->reporte=$request->reporte;
        $detail->save();

        return view('dashboard');
    }
    public function index(Request $request)
    {
        dd($request->id);

    }
}
