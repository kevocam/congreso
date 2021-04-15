<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Info;

class ViewInformation extends Component
{
    public $num = 1;
    use WithPagination;
    public function render()
    {
        return view('livewire.view-information', [
            'data'=>Info::latest()->paginate(5)
        ]);
        
    }
}
