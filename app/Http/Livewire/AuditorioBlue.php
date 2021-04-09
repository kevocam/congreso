<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AuditorioBlue extends Component
{
    public $chat = false;
    public function showChat(){
        $this->chat=true;
    }
    public function render()
    {
        return view('livewire.auditorio-blue');
    }
}
