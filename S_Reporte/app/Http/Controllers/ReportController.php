<?php

namespace App\Http\Controllers;
use  App\Models\Reporte;
use  App\Models\Transversalidad;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;


class ReportController extends Controller
{
     public function store(Request $request)
    {
        $validatedData = $request->validate([
            'documentoDG' => 'mimes:xls,xlsx,doc,pdf',
            'documento_dd' => 'mimes:xls,xlsx,doc,pdf',
            'documento_DP' => 'mimes:xls,xlsx,doc,pdf',
            'documento_P' => 'mimes:xls,xlsx,doc,pdf',
            'reporte' => 'mimes:xls,xlsx,doc,pdf',



        ]);

        $reporte = new Reporte;
        $user=auth()->user()->id;
        if($request->file('documentoDG')==null){

        }else{
        $nameDG = $request->file('documentoDG')->getClientOriginalName();
        $request->file('documentoDG')->storeAs('public/documentoDG',$nameDG);
        $pathDG =$nameDG;
        $reporte->documentoDG=$pathDG;
        $reporte->DDGmime=$_FILES['documentoDG']['type'];
        $reporte->DDGname=$nameDG;

                 }
    if($request->file('documento_dd')==null){


    }else{
        $nameDD=$request->file('documento_dd')->getClientOriginalName();
        $request->file('documento_dd')->storeAs('public/documentoDD',$nameDD);
        $pathDD=$nameDD;
        $reporte->documento_dd=$pathDD;
        $reporte->DDDmime=$_FILES['documento_dd']['type'];
        $reporte->DDDname=$nameDD;

    }
    if($request->file('documento_DP')==null){

    }else{
        $nameDP=$request->file('documento_DP')->getClientOriginalName();
        $request->file('documento_DP')->storeAs('public/documentoDP',$nameDP);
        $pathDP=$nameDP;
        $reporte->documento_DP=$pathDP;
        $reporte->DDPmime=$_FILES['documento_DP']['type'];
        $reporte->DDPname=$nameDP;
        // $pathDP=$request->file('documento_DP')->store('public');
    }
    if($request->file('documento_P')==null){}else{
        $nameP=$request->file('documento_P')->getClientOriginalName();
        $request->file('documento_P')->storeAs('public/DocumentoP',$nameP);
        $pathP=$nameP;
        $reporte->documento_P=$pathP;
        $reporte->DPmime=$_FILES['documento_P']['type'];
        $reporte->DPname=$nameP;

    }
        $Rname=$request->file('reporte')->getClientOriginalName();
        $request->file('reporte')->storeAs('public/Reporte',$Rname);
        $Rpath=$Rname;



        $reporte->fuente =$request->fuente;

        $reporte->user_id = auth()->user()->id;
        $date=date("d-m-y", strtotime($request->fecha));


        $reporte->fecha=$date;
        $reporte->n_situacion=$request->n_situacion;
        $reporte->transversalidad=$request->transversalidad;
        $reporte->metadato=$request->metadato;
        $reporte->evento=$request->metadato;
        $reporte->tema_selecto=$request->tema_selecto;
        $reporte->reseña=$request->reseña;
        $reporte->proceso_validacion=$request->proceso_validacion;
        $reporte->direccionG=$request->direccionG;
        $reporte->direccionesWebG=$request->direccionesWebG;


        $reporte->direcciones_diagnostico=$request->direcciones_diagnostico;
        $reporte->direccionesWebD=$request->direccionesWebD;
        $reporte->direccion_proyecto=$request->direccion_proyecto;
        $reporte->direccion_web_P=$request->direccion_web_P;



        $reporte->direccion_planeacion=$request->direccion_planeacion;
        $reporte->direccion_web_Pl=$request->direccion_web_Pl;

        $reporte->observaciones=$request->observaciones;

        $reporte->reporte=$Rpath;
        $reporte->Rmime=$_FILES['reporte']['type'];
        $reporte->Rname=$Rname;



        $reporte->save();
        $id=$reporte->id;

        return redirect()->route('dashboard', );
    }
    public function update(Request $request){
        $reporte = Reporte::find($request->id);
        $transversalidades= Transversalidad::all();

        return view ('ereport',compact('reporte','transversalidades'));
    }

    public function edit(Request $request){
        $reporte = Reporte::find($request->id);
        $user=auth()->user()->id;
        if($request->file('documentoDG')==null){

        }else{
        $nameDG = $request->file('documentoDG')->getClientOriginalName();
        $request->file('documentoDG')->storeAs('public/documentoDG',$nameDG);
        $pathDG =$nameDG;
        $reporte->documentoDG=$pathDG;
        $reporte->DDGmime=$_FILES['documentoDG']['type'];
        $reporte->DDGname=$nameDG;

                 }
        if($request->file('documento_dd')==null){


        }else{
            $nameDD=$request->file('documento_dd')->getClientOriginalName();
            $request->file('documento_dd')->storeAs('public/documentoDD',$nameDD);
            $pathDD=$nameDD;
            $reporte->documento_dd=$pathDD;
            $reporte->DDDmime=$_FILES['documento_dd']['type'];
            $reporte->DDDname=$nameDD;


        }
        if($request->file('documento_DP')==null){

        }else{
            $nameDP=$request->file('documento_DP')->getClientOriginalName();
            $request->file('documento_DP')->storeAs('public/documentoDP',$nameDP);
            $pathDP=$nameDP;
            $reporte->documento_DP=$pathDP;
            $reporte->DDPmime=$_FILES['documento_DP']['type'];
            $reporte->DDPname=$nameDP;
            // $pathDP=$request->file('documento_DP')->store('public');
        }
        if($request->file('documento_P')==null){}else{
            $nameP=$request->file('documento_P')->getClientOriginalName();
            $request->file('documento_P')->storeAs('public/DocumentoP',$nameP);
            $pathP=$nameP;
            $reporte->documento_P=$pathP;
            $reporte->DPmime=$_FILES['documento_P']['type'];
            $reporte->DPname=$nameP;

        }
        if($request->file('reporte')==null){}else{



        $Rname=$request->file('reporte')->getClientOriginalName();
        $request->file('reporte')->storeAs('public/Reporte',$Rname);
        $Rpath=$Rname;
        $reporte->reporte=$Rpath;
        $reporte->Rmime=$_FILES['reporte']['type'];
        $reporte->Rname=$Rname;
}
        $reporte->fuente = $request->fuente;
        $reporte->user_id = auth()->user()->id;


        $date=date("d-m-Y", strtotime($reporte->fecha));




        $reporte->fecha=$date;
        $reporte->n_situacion=$request->n_situacion;
        $reporte->transversalidad=$request->transversalidad;
        $reporte->metadato=$request->metadato;
        $reporte->evento=$request->metadato;
        $reporte->tema_selecto=$request->tema_selecto;
        $reporte->reseña=$request->reseña;
        $reporte->proceso_validacion=$request->proceso_validacion;

        $reporte->direccionG=$request->direccionG;
        $reporte->direccionesWebG=$request->direccionesWebG;


        $reporte->direcciones_diagnostico=$request->direcciones_diagnostico;
        $reporte->direccionesWebD=$request->direccionesWebD;
        $reporte->direccion_proyecto=$request->direccion_proyecto;
        $reporte->direccion_web_P=$request->direccion_web_P;





        $reporte->observaciones=$request->observaciones;




        $reporte->save();
        return redirect()->route('dashboard', );

    }
    public function destroy(Request $request)
    {
        $reporte = Reporte::find($request->id);
        $reporte->delete();

        return redirect()->route('reportes',);
    }
    public function search(Request $request){
        // $request->filter , $request->search $request->tipo
        $transversalidades=DB::table('transversalidad');
        if($request->tipo == 'all'){
        // $searches = DB::table('reportes')->where($request->filter,$request->search)->get();
        $searches = DB::table('reportes')->where($request->filter,'like', '%' . $request->search . '%')->get();

        }else{
            if($request->tipo=='metadato'){
                $searches = DB::table('reportes')->where($request->filter, $request->search)
                                                    ->where('metadato',1)->get();
            }
            if($request->tipo=='evento'){
                $searches = DB::table('reportes')->where($request->filter, $request->search)
                ->where('evento',1)->get();

            }
            if($request->tipo=='tema_selecto'){
                $searches = DB::table('reportes')->where($request->filter, $request->search)
                ->where('tema_selecto',1)->get();

            }
        }

        // dd($request->filter, $request->search,$searches,$request->tipo);
        return view('searches',compact('searches','transversalidades'));

    }




}
