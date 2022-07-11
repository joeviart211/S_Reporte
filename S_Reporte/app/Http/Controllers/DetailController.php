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

        // $Departamento=$request->user()->currentTeam->id;
        // $detail->documento_dd=$pathDD;
        $nameDG = $request->file('documentoDG')->getClientOriginalName();
        $pathDG = $request->file('documentoDG')->store('public');
        $nameDD=$request->file('documento_dd')->getClientOriginalName();
        $pathDD=$request->file('documento_dd')->store('public');
        $nameDP=$request->file('documento_DP')->getClientOriginalName();
        $pathDP=$request->file('documento_DP')->store('public');
        $pathP=$request->file('documento_P')->store('public');
        $nameP=$request->file('documento_P')->getClientOriginalName();
        $Rname=$request->file('reporte')->getClientOriginalName();
        $Rpath=$request->file('reporte')->store('public');






        $detail = new Detalle;
        $detail->id =$request->id;
        $detail->direccionG=$request->direccionG;
        $detail->direccionesWebG=$request->direccionesWebG;
        $detail->documentoDG=$pathDG;
        $detail->DDGmime=$_FILES['documentoDG']['type'];
        $detail->DDGname=$nameDG;

        $detail->direcciones_diagnostico=$request->direcciones_diagnostico;
        $detail->direccionesWebD=$request->direccionesWebD;
        $detail->direccion_proyecto=$request->direccion_proyecto;
        $detail->direccion_web_P=$request->direccion_web_P;

        $detail->documento_dd=$pathDD;
        $detail->DDDmime=$_FILES['documento_dd']['type'];
        $detail->DDDname=$nameDD;


        $detail->documento_DP=$pathDP;
        $detail->DDPmime=$_FILES['documento_DP']['type'];
        $detail->DDPname=$nameDP;
        $detail->direccion_planeacion=$request->direccion_planeacion;
        $detail->direccion_web_Pl=$request->direccion_web_Pl;
        $detail->documento_P=$pathP;
        $detail->DPmime=$_FILES['documento_P']['type'];
        $detail->DPname=$nameP;
        $detail->observaciones=$request->observaciones;
        $detail->tipo=$request->tipo;
        $detail->reporte=$Rpath;
        $detail->Rmime=$_FILES['reporte']['type'];
        $detail->Rname=$Rname;

        // detail);

        $detail->save();

        return view('reportes');
    }

    public function update(Request $request)
    {
        $id=$request->id;
        $detail = Detalle::find($request->id);

        if($detail==null){
            return view ('cdetalles',compact('detail',));
         }



        return view ('edetail',compact('detail','id'));
    }
    public function edit(Request $request){

        $validatedData = $request->validate([
            'documentoDG' => 'mimes:xls,xlsx,doc,pdf',
            'documento_dd' => 'mimes:xls,xlsx,doc,pdf',
            'documento_DP' => 'mimes:xls,xlsx,doc,pdf',
            'documento_P' => 'mimes:xls,xlsx,doc,pdf',
            'reporte' => 'mimes:xls,xlsx,doc,pdf',


        ]);


        // $nameDG = $request->file('documentoDG')->getClientOriginalName();

        // $pathDG = $request->file('documentoDG')->store('public');
        // $nameDD=$request->file('documento_dd')->getClientOriginalName();
        // $pathDD=$request->file('documento_dd')->store('public');
        // $nameDP=$request->file('documento_DP')->getClientOriginalName();
        // $pathDP=$request->file('documento_DP')->store('public');
        // $pathP=$request->file('documento_P')->store('public');
        // $nameP=$request->file('documento_P')->getClientOriginalName();
        // $Rname=$request->file('reporte')->getClientOriginalName();
        // $Rpath=$request->file('reporte')->store('public');




        $detail = Detalle::find($request->id);

        $detail->direccionG=$request->direccionG;
        $detail->direccionesWebG=$request->direccionesWebG;
        // $detail->documentoDG=$pathDG;

        //  $detail->DDGmime=$_FILES['documentoDG']['type'];

        // $detail->DDGname=$nameDG;

        $detail->direcciones_diagnostico=$request->direcciones_diagnostico;
        $detail->direccionesWebD=$request->direccionesWebD;
        $detail->direccion_proyecto=$request->direccion_proyecto;
        $detail->direccion_web_P=$request->direccion_web_P;

        // $detail->documento_dd=$pathDD;
        // $detail->DDDmime=$_FILES['documento_dd']['type'];
        // $detail->DDDname=$nameDD;


        // $detail->documento_DP=$pathDP;
        // $detail->DDPmime=$_FILES['documento_DP']['type'];
        // $detail->DDPname=$nameDP;
        $detail->direccion_planeacion=$request->direccion_planeacion;
        $detail->direccion_web_Pl=$request->direccion_web_Pl;
        // $detail->documento_P=$pathP;
        // $detail->DPmime=$_FILES['documento_P']['type'];
        // $detail->DPname=$nameP;
        $detail->observaciones=$request->observaciones;
        $detail->tipo=$request->tipo;
        // $detail->reporte=$Rpath;
        // $detail->Rmime=$_FILES['reporte']['type'];
        // $detail->Rname=$Rname;
        $detail->save();

        return redirect()->route('reportes',);

    }
}
