<?php

namespace App\Http\Controllers;
use  App\Models\Transversalidad;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TransversalidadController extends Controller
{
    public function store(Request $request)
    {

       $ident=Transversalidad::all();
        $transversalidad = new Transversalidad;
        $name=str_replace(" ","_", $request->eje);
        $transversalidad->nombre=$request->eje;
        $transversalidad->eje=$name;
        $transversalidad->fecha=$request->fecha;
        $transversalidad->justificacion=$request->justificacion;





        $transversalidad->save();
        return redirect()->route('dashboard', );
    }
    public function update(Request $request){

        $transversalidad = DB::table("transversalidad")->where('eje', $request->eje)->first();


        return view ('etransver',compact('transversalidad'));

    }
    public function edit(Request $request){


        $name=str_replace(" ","_", $request->nombre);
        $nombre = $request->nombre;
        $eje=$name;
        $fecha=$request->fecha;
        $justificacion=$request->justificacion;



        DB::update('update transversalidad set eje=? ,nombre=? ,fecha=? ,justificacion=? where eje = ?',[$eje,$nombre,$fecha,$justificacion,$eje]);
        return redirect()->route('dashboard', );
    }
    public function destroy(Request $request){

        DB::table('transversalidad')->where('eje', $request->eje)->delete();
        
        return redirect()->route('dashboard',);
    }
}

