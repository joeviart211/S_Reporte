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
        $transversalidad->nombre = $request->nombre;
        $i=0;
        foreach($ident as $id){
        $i=$i+1;} //no encontré una forma de hacer una columna auto_incr que no sea la llave 
        $transversalidad->id=$i;
        
        

        


      $transversalidad->save();


        return redirect()->route('dashboard', );
    }
}
