<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Question;


class Questions extends Component
{
    public $question, $user, $auditorio, $linkZoom;

    public $showModal = false; 
    public $zoom=[
        "https://zoom.us/j/96738061744?pwd=RElvaDdnVTBVZkxvcmdtTFcxalhOZz09",
        "https://us06web.zoom.us/j/85026216115?pwd=QjRFZU5acFMyWjloT2RpdStZZUp6Zz09",
        "https://us02web.zoom.us/j/82484786206?pwd=c2dxOENHRE4rdk5jZzJHSnkydHpiUT09",
        "https://us06web.zoom.us/j/85697489979?pwd=U3pQTWRrV0gzNk1qQURGbkt2RmU3QT09"
    ];
        

    
    

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
    public function mount($auditorio){
        $this->user=auth()->id();
        $this->auditorio = $auditorio;
        $this->linkZoom = $this->zoom[$auditorio-1];
        
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
            "user_id" => $this->user,
            "audience" => $this->auditorio

        ]);
        $this->clearInputs();   
        
        
        session()->flash('message', "Mensaje enviado con éxito");
/*         $this->closeModal(); 
 */       
    }
}
