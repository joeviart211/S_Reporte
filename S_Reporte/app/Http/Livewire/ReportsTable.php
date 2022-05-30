<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ReportsTable extends Component
{
    public function render()
    {
        $reports=DB::table('reporte_ejecutivo')->get();
        return view('livewire.reports-table',['reports' => $reports]);
    }
}
