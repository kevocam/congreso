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
    public $name, $email, $lastName, $idUser;

    public $taller1,$rolesUser, $taller2,$taller3,$taller4,$taller5,$taller6,$congreso;
    public $roles =[];
    public $newRoles = [];

    protected $rules = [
        'name' => 'required|string|min:4',
        'lastName' => 'required|string|min:4',
        'email' => 'required|email|string|min:6'        
    ];

    public function clean(){
        $this->name = "";
        $this->email ="";
        $this->lastName = "";
        $this->taller1 = false;
        $this->taller2 = false;
        $this->taller3 = false;
        $this->taller4 = false;
        $this->taller5 = false;
        $this->taller6 = false;
        $this->congreso = false;
        $this->roles= [];
    }


    public function edit($id){


        $buffer = User::findOrFail($id);
        $this->rolesUser = $buffer->roles()->get()->pluck('name')->toArray();        
        $this->idUser= $id;


        if(in_array("taller1", $this->rolesUser)){
            $this->taller1 = true;
        }
        if(in_array("taller2", $this->rolesUser)){
            $this->taller2 = true;
        }
        if(in_array("taller3", $this->rolesUser)){
            $this->taller3 = true;
        }
        if(in_array("taller4", $this->rolesUser)){
            $this->taller4 = true;
        }
        if(in_array("taller5", $this->rolesUser)){
            $this->taller5 = true;
        }
        if(in_array("taller6", $this->rolesUser)){
            $this->taller6 = true;
        }
        if(in_array("congreso", $this->rolesUser)){
            $this->congreso = true;
        }

        $this->name = $buffer->name;
        $this->lastName = $buffer->lastName;
        $this->email = $buffer->email;
        $this->showEditModel = true;

    }
    public function save(){

        $this->validate();
        if($this->taller1){            
            array_push($this->roles, "taller1");
        }
        if($this->taller2){
            
            array_push($this->roles, "taller2");
        }
        if($this->taller3){
            
            array_push($this->roles, "taller3");
        }
        if($this->taller4){
            
            array_push($this->roles, "taller4");
        }
        if($this->taller5){
            
            array_push($this->roles, "taller5");
        }
        if($this->taller6){
            
            array_push($this->roles, "taller6");
        }
        if($this->congreso){
            
            array_push($this->roles, "congreso");
        }

        
            if($this->idUser){
            $user = User::find($this->idUser);
            $user->update([
                'name' => $this->name,
                'lastName' => $this->lastName,
                'email' => $this->email,            

            ]); 

            if(count($this->rolesUser) > 1){
                foreach($this->rolesUser as $rol){                
                    $user->removeRole($rol);
                }  
            } 

             
            if(count($this->roles) > 1){
                foreach($this->roles as $rol){                
                    $user->assignRole($rol);
                }  
            } 
        }
        $this->rolesUser=[];
        
        $this->roles=[];
        $this->showEditModel = false;

        /* $user->assignRole(implode(',',$this->roles)); */
        session()->flash('message', 'Editado con éxito.');


    }
    public function closeModal(){
        $this->clean();
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
