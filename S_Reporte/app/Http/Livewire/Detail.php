<?php

namespace App\Http\Livewire;
use App\Models\Detalle;
use App\Models\Reporte;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Detail extends Component
{

    public function render()
    {
        $actual_link = "$_SERVER[REQUEST_URI]";
        $ident=substr($actual_link, 10);

        // $detalles= Reporte::where('id',$ident)->get();
        $detalle = DB::table('reportes')->find($ident);
        $id=$detalle->user_id;
        $usuario= DB ::table('users')->find($id);
        if($usuario==null){
            $user="Usuario no encontrado";
        }else{

            $user=$usuario->name;
        }
        

        return view('livewire.Detail',[
            'detalle'=>$detalle,
            'ident'=>$ident,
            'user'=>$user
        ]
    );
    }
}
