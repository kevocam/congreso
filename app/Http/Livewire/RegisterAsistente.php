<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class RegisterAsistente extends Component
{
    

    public $name, $email, $password, $user;

    protected $rules = [
        'email' => 'required|string|min:6',
        'password' => 'required|string|min:6',      
    ];

    public function render()
    {
        return view('livewire.register-asistente');
    }
    public function store(){

        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $user->assignRole('asistente');

    }
}
