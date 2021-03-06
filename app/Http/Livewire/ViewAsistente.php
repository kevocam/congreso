<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class ViewAsistente extends Component{
    
    public $contador;
    
/*     use WithPagination;
 */    
    public function mount(){
        /* $this->data= User::with('roles')->select('id','name', 'email')->whereHas('roles', function($q){
            $q->whereIn('name', ['asistente']);
        })->paginate(2); */
    } 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $this->contador=1;       
        return view('livewire.view-asistente',['data'=>User::with('roles')->select('id','name', 'email')->whereHas('roles', function($q){
            $q->whereIn('name', ['asistente']);
        })->paginate(7)] );
    }
    public function delete($id){

      
         if($id)    {

            User::find($id)->delete();
            session()->flash('message', 'Borrado satisfactoriamente.');
        }  
    }

}
