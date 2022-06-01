<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ReportsTable extends Component
{
    use WithPagination;
    public function render()
    {
        $reports=DB::table('reporte_ejecutivo')->paginate(10);
        return view('livewire.reports-table',['reports' => $reports]);
    }
}
