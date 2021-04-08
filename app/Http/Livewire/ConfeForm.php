<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
class ConfeForm extends Component

{
    use WithFileUploads;


public $dirphoto,$dataValidated,$name,$lastName, $description,$photo;
public $about, $address, $email,$phone, $rateEnglish, $rateSpanish,$rateOther,$OtherLanguaje, $facebook, $twitter, $linkedin;


    protected $rules = [
         'name' => 'required|string|min:2',
       /* 
        */
    ];
    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
    ];

   public function clear(){
       $this->name="";
       $this->description="";
       $this->photo="";
       $this->facebook="";
       $this->twitter="";
       $this->linkedin="";
   }
   protected $validationAttributes = [
    'email' => 'email address'
];
    public function render()
    {
        return view('livewire.confe-form');
    }
    public function store(){
        $this->validate();

        $dirphoto=$this->photo->store('photo','public');        

        User::create([
            'name'=>$this->name,
            'lastname'=>$this->lastName,
            'address'=>$this->address,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'profile_photo_path'=>$dirphoto,
            'description'=>$this->description,
            'about'=>$this->about,
            'rateSpanish'=>$this->rateSpanish,
            'rateEnglish'=>$this->rateEnglish,
            'rateOther'=>$this->rateOther,
            'otherLanguaje'=>$this->OtherLanguaje,
            'facebook'=>$this->facebook,
            'twitter'=>$this->twitter,
            'linkedin'=>$this->linkedin
        ]);
        $this->clear();
        session()->flash('message', '¡Agregado con éxito!  👍');

    }

}
