<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
class ViewQuestions extends Component
{
    public $data;
    public $auditorio;

    public function render()
    {
        $this->data = Question::where("audience", $this->auditorio)->get();
        return view('livewire.view-questions');
    }

}
