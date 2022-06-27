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
        $name=str_replace(" ","_", $request->nombre);
        $transversalidad->nombre=$name;

        $i=0;
        foreach($ident as $id){
        $i=$i+1;//no encontré una forma de hacer una columna auto_incr que no sea la llave

        }
        $transversalidad->id=$i;

        $transversalidad->save();
        return redirect()->route('dashboard', );
    }
    public function update(Request $request){

        $transversalidad = Transversalidad::find($request->id);

        return view ('etransver',compact('transversalidad'));

    }
    public function edit(Request $request){

        $transversalidad = Transversalidad::find($request->id);
        $name=str_replace(" ","_", $request->nombre);
        $transversalidad->nombre = $name;


        $transversalidad->save();
        return redirect()->route('dashboard', );
    }
    public function destroy(Request $request){
        $transversalidad = Transversalidad::find($request->id);
        $transversalidad->delete();

        return redirect()->route('dashboard',);
    }
}

