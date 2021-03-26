<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Chat;

class ChatList extends Component
{
    public $data, $newMsn;

    protected $listeners = ['actualizarMensajes' => 'render'];

    /* 
     public function actualizar()
    {
        $this->newMsn= "dsa";

    } */
      public function render()
    {
        $this->data= Chat::orderBy('created_at','desc')->take(5)->get();
        
        return view('livewire.chat-list');
    }
}
