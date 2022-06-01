<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reporte;
use Livewire\WithPagination;

class Reportes extends Component
{
    use WithPagination;

    public function render()
    {


        $reportes= Reporte::all();
        return view('livewire.reportes',[
            'reportes'=> $reportes,
        ]);
    }
}
