<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use Livewire\WithPagination;

class ViewQuestions extends Component
{
    
    public $auditorio = 1;
    use WithPagination;
    public function render()
    {        
        return view('livewire.view-questions', [
            'data'=>Question::where("audience", $this->auditorio)->latest()->paginate(5)
        ]);
    }

}
