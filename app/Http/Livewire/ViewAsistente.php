<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class ViewAsistente extends Component{
    
    
    
    use WithPagination;
    public $contador;
    public $showEditModel = false;    
    public $search, $detalle;
    public User $editing;
    protected $rules = [
        'editing.name' => 'required|string|min:6',
        'editing.email' => 'required|email|string|min:6',
        
    ];


    public function edit(User $asistente){
        $this->editing = $asistente; 
        $this->showEditModel = true;

    }
    public function save(){
        $this->validate();
        $this->editing->save(); 
        $this->showEditModel = false;

    }
    public function render()
    {
        $this->contador=1;      
        
        
        return view('livewire.view-asistente',[
            'data'=>User::with('roles')->where('name','like','%'.$this->search.'%')->paginate(5),            
            ]);
    }
    public function delete($id){
      
         if($id){
            User::find($id)->delete();
            session()->flash('message', 'Borrado satisfactoriamente.');
        }  
    }

}
