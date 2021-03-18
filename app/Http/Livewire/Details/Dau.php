<?php

namespace App\Http\Livewire\Details;

use Livewire\Component;

class Dau extends Component
{
    public $isOpen = false;

    public function render()
    {
        return view('livewire.details.dau');
    }
    public function openModal()
    {
        $this->isOpen = true;
    }
}
