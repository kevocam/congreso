<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Confe;

class ConfeView extends Component
{
    public $data;
    public function render()
    {
        $this->data= Confe::all();
        return view('livewire.confe-view');
    }
    public function delete($id)
    {  
        if($id)    {

            Confe::find($id)->delete();
            session()->flash('message', 'Borrado satisfactoriamente.');
        }  
    }
}
