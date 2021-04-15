<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Info;
class Information extends Component
{
    public $question, $email, $phone, $user, $stand;

    public $showModal = false; 

    public function render()
    {
        return view('livewire.information');
    }
    public function showModal(){
        $this->showModal = true;
    }
    public function closeModal(){
        $this->showModal = false;

    }
    public function mount($stand){

        $this->user=auth()->id();
        $this->stand= $stand;
    }
    public function clearInputs(){
        $this->question="";
        $this->phone="";
        $this->email="";        
    }

    protected $messages = [
        'question.required' => 'Debe escribir algo.',
        'question.min' => 'Su mensaje es muy corto.',
        'question.max' => 'Su mensaje es muy largo.',
        'email.email' => 'No parece ser un correo válido',
        'email.required' => 'Debe ingresar su correo',
        'phone.required' => 'Debe ingresar su teléfono',
        'phone.digits_between'=> 'Debe ser mayor de 5 digitos y menor de 12.'
    ];
    public function store(){
        $this->validate([
            'question' => 'required|min:3|max:160',
            "email" => 'required|email',
            'phone' => 'required|digits_between:5,12'
        ]);
        Info::create([
            "question" => $this->question,
            "phone" => $this->phone,
            "email" => $this->email,
            "user_id" => $this->user,
            "stand" => $this->stand

        ]);
        $this->clearInputs();   
        
        
        session()->flash('message', "Mensaje enviado con éxito");
/*         $this->closeModal(); 
 */       
    }
}
