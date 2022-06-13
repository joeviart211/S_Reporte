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
        
        return view('livewire.reports-table');
    }
}
