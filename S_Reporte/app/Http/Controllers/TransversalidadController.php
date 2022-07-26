<?php

namespace App\Http\Controllers;
use  App\Models\Transversalidad;

use Illuminate\Http\Request;

class TransversalidadController extends Controller
{
    public function store(Request $request)
    {

       $ident=Transversalidad::all();
        $transversalidad = new Transversalidad;
        $name=str_replace(" ","_", $request->eje);
        $transversalidad->nombre=$request->nombre;
        $transversalidad->eje=$name;
        $transversalidad->fecha=$request->fecha;
        $transversalidad->justificacion=$request->justificacion;





        $transversalidad->save();
        return redirect()->route('dashboard', );
    }
    public function update(Request $request){

        $transversalidad = Transversalidad::find($request->eje);
 dd($request->eje);
        return view ('etransver',compact('transversalidad'));

    }
    public function edit(Request $request){

        $transversalidad = Transversalidad::find($request->eje);
        $name=str_replace(" ","_", $request->eje);
        $transversalidad->nombre = $name;
        $transversalidad->eje=$name;


        $transversalidad->save();
        return redirect()->route('dashboard', );
    }
    public function destroy(Request $request){
        $transversalidad = Transversalidad::find($request->eje);
        $transversalidad->delete();

        return redirect()->route('dashboard',);
    }
}

