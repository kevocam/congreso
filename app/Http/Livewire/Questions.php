<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Question;


class Questions extends Component
{
    public $question, $user, $auditorio, $linkZoom;

    public $showModal = false; 
    public $zoom=[
        "https://zoom.us/j/92221511350?pwd=MVBnUXljTnlPdGozd2I1dnUyODNXdz09",
        "https://zoom.us/j/94063937449?pwd=bmIzLzdvOWtZNGZNZjE5d0xrNjJxQT09",
        "https://zoom.us/j/93540878642?pwd=cEN2R0Y2SXAzNzFnUXVnak8vVDFYZz09",
        "https://zoom.us/j/95515291460?pwd=MC9FdjArdGl0bE5ld1pib1lnSDZmQT09"
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
