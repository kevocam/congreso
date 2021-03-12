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
    public function EnviarMsn(){
        \App\Models\Chat::create([
            "content" => $this->mensaje,
            "id_user" => $this->user

        ]);
       /*  $this->mensaje =$this->mensaje."adsasd"; */
       $this->emit("EnviarMsn");

       
    }
}
