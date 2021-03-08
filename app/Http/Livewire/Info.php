<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\User;

class Info extends Component
{
    public $name ="Jul";
    public $data;

    public function mount( $name){
        $this->data = User::all();
    }

    public function render()
    {
        return view('livewire.info');
    }
    /* public function refresh(){
        $this->emit();
    } */
    public function updated(){
        $this->name ="hydratado";
    }
}
