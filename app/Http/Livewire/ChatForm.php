<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $user, $datos;
    public $mensaje ;

    public function mount(){
/*         $this->user = auth()->id();
 */
        $this->user="";
        $this->mensaje="";
    }
    public function render()
    {
        return view('livewire.chat-form');
    }
    public function updated($field){
        $this->validateOnly($field, [
            'user' => 'required',
            'mensaje' => 'required'
        ]);
    }
    public function enviarMensaje(){

       /*  $this->mensaje =$this->mensaje."adsasd"; */
       $this->emit("mensajeEnviado");

        $this->validate([
            'user' => 'required|min:3',
            'mensaje' => 'required'
        ]);
        $this->emit("mensajeEnviado");

        $datos =[
            'user' => $this->user,
            'mensaje' => $this->mensaje
        ];

        event(new \App\Events\EnviarMsn($this->user, $this->mensaje)); 
    }
}
