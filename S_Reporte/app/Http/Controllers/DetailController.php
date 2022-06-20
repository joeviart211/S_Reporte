<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Detalle;

class DetailController extends Controller
{
    public function store(Request $request)
    {
        //validación

        $validatedData = $request->validate([
            'documentoDG' => 'mimes:xls,xlsx,doc,pdf',
            'documento_dd' => 'mimes:xls,xlsx,doc,pdf',
            'documento_DP' => 'mimes:xls,xlsx,doc,pdf',
            'documento_P' => 'mimes:xls,xlsx,doc,pdf',
            'reporte' => 'mimes:xls,xlsx,doc,pdf',


           ]);
           //subir a carpetas

        // $N = $request->file('')->getClientOriginalName();

        $Departamento=$request->user()->currentTeam->id;

        $nameDG = $request->file('documentoDG')->getClientOriginalName();
        $pathDG = $request->file('documentoDG')->store('public');



        $detail = new Detalle;
        $detail->id =$request->id;
        $detail->direccionG=$request->direccionG;
        $detail->direccionesWebG=$request->direccionesWebG;

        $detail->documentoDG=$pathDG;
        $detail->DDGmime=$_FILES['documentoDG']['type'];
        $detail->DDGname=$nameDG;
       // $detail->documentoDG=file_get_contents($_FILES['documentoDG']['tmp_name']);
        $detail->direcciones_diagnostico=$request->direcciones_diagnostico;
        $detail->direccionesWebD=$request->direccionesWebD;
        $detail->direccion_proyecto=$request->direccion_proyecto;
        $detail->direccion_web_P=$request->direccion_web_P;
        // $detail->documento_dd=$request->documento_dd;
        $detail->documento_dd=$request->file('documento_dd');
        $detail->DDDmime=$_FILES['documento_dd']['type'];
        $detail->DDDname=$_FILES['documento_dd']['name'];
        // $detail->documento_DP=$request->documento_DP;
        $detail->documento_DP=$request->file('documento_DP');
        $detail->DDPGmime=$_FILES['documento_DP']['type'];
        $detail->DDPname=$_FILES['documento_DP']['name'];
        $detail->direccion_planeacion=$request->direccion_planeacion;
        $detail->direccion_web_Pl=$request->direccion_web_Pl;
        $detail->documento_P=$request->documento_P;
        $detail->DPmime=$_FILES['documentoDG']['type'];
        $detail->DPname=$_FILES['documentoDG']['name'];
        $detail->observaciones=$request->observaciones;
        $detail->tipo=$request->tipo;
        $detail->reporte=$request->reporte;
        $detail->Rmime=$_FILES['documentoDG']['type'];
        $detail->Rname=$_FILES['documentoDG']['name'];

        // dd($detail);

        $detail->save();

        return view('dashboard');
    }
    public function index(Request $request)
    {
        dd($request->id);

    }
}
