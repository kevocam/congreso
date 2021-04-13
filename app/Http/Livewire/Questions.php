<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Question;

class Questions extends Component
{
    public $question, $user;

    public $showModal = false; 

    public function render()
    {
        return view('livewire.questions');
    }
    public function showModal(){
        $this->showModal = true;
    }
    public function closeModal(){
        $this->showModal = false;

    }
    public function mount(){

        $this->user=auth()->id();
        
    }
    public function clearInputs(){
        $this->question="";
    }

    protected $messages = [
        'question.required' => 'Debe escribir algo.',
        'question.min' => 'Su mensaje es muy corto.',
        'question.max' => 'Su mensaje es muy largo.',
    ];
    public function store(){

        $this->validate([
            'question' => 'required|min:3|max:160'
        ]);
        Question::create([
            "question" => $this->question,
            "id_user" => $this->user,
            "audience" => 1

        ]);
        $this->clearInputs();   
        
        
        session()->flash('message', "Mensaje enviado con éxito");
/*         $this->closeModal(); 
 */



       
    }
}
