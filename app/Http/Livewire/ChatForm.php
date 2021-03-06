<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Chat;
class ChatForm extends Component
{
    public $user, $datos, $data;
    public $mensaje ;
    public $chat=false;

    public function mount(){

        $this->user=auth()->id();
        $this->mensaje="";
    }
    protected $listeners = ['actualizarMensajes' => 'render'];


    protected $messages = [
        'mensaje.required' => 'Debe escribir algo.',
        'mensaje.min' => 'Su mensaje es muy corto.',
        'mensaje.max' => 'Su mensaje es muy largo.',
    ];
    public function showChat(){
        $this->chat = true;
    }
    public function hiddeChat(){
        $this->chat = false;
    }
    public function render()
    {
        $this->data= Chat::orderBy('created_at','desc')->take(10)->get();

        return view('livewire.chat-form');
    }
    public function clearInputs(){
        $this->mensaje="";
    }
    public function EnviarMensaje(){

        $this->validate([
            'mensaje' => 'required|min:3|max:120'
        ]);
        \App\Models\Chat::create([
            "content" => $this->mensaje,
            "id_user" => $this->user

        ]);
        $this->clearInputs();
       /*  $this->mensaje =$this->mensaje."adsasd"; */
       $this->emit("mensajeEnviado");
/*        $this->emit("actualizarMensajes", $this->mensaje);
 */
        event(new \App\Events\EnviarMsn($this->user, $this->mensaje));
       
    }
}
