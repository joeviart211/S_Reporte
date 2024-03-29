<?php

namespace App\Http\Controllers;
use App\Models\Reporte;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(Request $request,$doc){


    //     dd("a");


        $detalle=Reporte::find($request->id);

        if($doc=="documentoDG"){

        $path=$detalle->documentoDG;
        $path=public_path("storage/documentoDG/".$path);
        $type=$detalle->DDGmime;
        $headers = ['Content-Type:'.$type ];
        $fileName= $detalle->DDGname;



        }else{

            if($doc=="documento_dd"){
                $path=$detalle->documento_dd;
                $path=public_path("storage/documentoDD/".$path);
                $type=$detalle->DDDmime;
                $headers = ['Content-Type:'.$type ];
                $fileName= $detalle->DDDname;
            }else{
                if($doc=="documento_DP"){
                $path=$detalle->documento_DP;
                $path=public_path("storage/documentoDP/".$path);
                $type=$detalle->DDPmime;
                $headers = ['Content-Type:'.$type ];
                $fileName= $detalle->DDPname;

                }else{
                    if($doc=="documento_P"){
                        $path=$detalle->documento_P;
                        $path=public_path("storage/documentoP/".$path);
                        $type=$detalle->DPmime;
                        $headers = ['Content-Type:'.$type ];
                        $fileName= $detalle->DPname;
                    }else{
                    if($doc=="reporte"){
                        $path=$detalle->reporte;
                        $path=public_path("storage/Reporte/".$path);
                        $type=$detalle->Rmime;
                        $headers = ['Content-Type:'.$type ];
                        $fileName= $detalle->Rname;
                    }else{
                         dd("Documento no encontrado");
                    }
                }
            }

        }
    }



		return response()->download($path, $fileName, $headers);









    }
}
