<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $user, $datos;
    public $mensaje ;

/*     protected $listeners = ['EnviarMsn'];
 *//*     protected $listeners = ['EnviarMsn'];
 */    public function mount(){
/*         $this->user = auth()->id();
 */
        $this->user=auth()->id();
        $this->mensaje="";
    }

    protected $messages = [
        'mensaje.required' => 'Debe escribir algo.',
        'mensaje.min' => 'Su mensaje es muy corto.',
        'mensaje.max' => 'Su mensaje es muy largo.',
    ];
    public function render()
    {
        return view('livewire.chat-form');
    }
    
    public function EnviarMensaje(){

        $this->validate([
            'mensaje' => 'required|min:3|max:120'
        ]);
        \App\Models\Chat::create([
            "content" => $this->mensaje,
            "id_user" => $this->user

        ]);
       /*  $this->mensaje =$this->mensaje."adsasd"; */
       $this->emit("mensajeEnviado");
/*        $this->emit("actualizarMensajes", $this->mensaje);
 */
        event(new \App\Events\EnviarMsn($this->user, $this->mensaje));
       
    }
}
