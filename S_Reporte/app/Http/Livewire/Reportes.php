<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reporte;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Reportes extends Component
{
    use WithPagination;

    public function render()
    {


        // $reportes= Reporte::all()->paginate(20);
        return view('livewire.reportes',[
             'reportes' => DB::table('reportes')->orderBy('id', 'DESC')->paginate(15)
        ]);
    }
}
