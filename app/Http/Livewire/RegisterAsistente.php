<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class RegisterAsistente extends Component
{
    

    public $name,$lastName,$email,$password,$user,$slot,$taller1,$taller2,$taller3,$taller4,$taller5,$taller6,$congreso;

    public $roles=[];


    protected $rules = [
        'name' => 'required|string|min:2',      
        'lastName' => 'required|string|min:2',
        'email' => 'required|email|string|min:6',
        'password' => 'required|string|min:4',      
    ];

    protected $messages = [
        'name.required' => 'Es requerido.',
        'lastName.required' => 'Es requerido.',
        'email.required' => 'Correo no puede estar vacio.',
        'email.email' => 'El correo no tiene un formato válido',
        'name.min' => 'No cumple con lo mínimo requerido.',
        'lastName.min' => 'No cumple con lo mínimo requerido.',
        'email.min' => 'No cumple con lo mínimo requerido.',
        'password.min' => 'No cumple con lo mínimo requerido.',


    ];
    public function clean(){
        $this->name = "";
        $this->email ="";
        $this->password = "";
        $this->taller1 = false;
        $this->taller2 = false;
        $this->taller3 = false;
        $this->taller4 = false;
        $this->taller5 = false;
        $this->taller6 = false;
        $this->congreso = false;

    }

    public function render()
    {
        
        return view('livewire.register-asistente');
    }
    public function store(){
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
        
        /* dd(implode($this->roles)); */ 

        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'lastName' => $this->lastName,

            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        foreach($this->roles as $rol){
            
            $user->assignRole($rol);
        }  
        
        


        /* $user->assignRole(implode(',',$this->roles)); */
        session()->flash('message', '🔔 Guardado con éxito. ');

        $this->clean();


    }
}
