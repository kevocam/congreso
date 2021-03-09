<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $user, $datos;
    public $mensaje ;


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
        $this->validate([
            'user' => 'required|min:3',
            'mensaje' => 'required'
        ]);
        $this->emit("mensajeEnviado");

        $datos =[
            'user' => $this->user,
            'mensaje' => $this->mensaje
        ];
        $this->emit("mensajeRecibido");

        event(new \App\Events\EnviarMsn($this->user, $this->mensaje));
    }
}
