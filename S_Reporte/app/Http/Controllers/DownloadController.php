<?php

namespace App\Http\Controllers;
use App\Models\Detalle;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(Request $request,$doc){




        $detalle=Detalle::find($request->id);

        if($doc=="documentoDG"){
         $path=$detalle->documentoDG;
        $path=public_path("storage/".$test);
        $headers = ['Content-Type: application/pdf'];
        $fileName= $detalle->DDGname;


        }else{

        }



		return response()->download($path, $fileName, $headers);









    }
}
