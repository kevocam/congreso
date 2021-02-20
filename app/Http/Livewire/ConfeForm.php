<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Confe;
use Livewire\WithFileUploads;
class ConfeForm extends Component
{
    use WithFileUploads;
/*     public Confe $confe;
 */
public $dirphoto,$dataValidated,$name, $description,$photo, $facebook, $twitter, $linkedin;
    protected $rules = [
        'name' => 'required|string|min:6',
        'description' => 'required|string|max:500',
        'photo' => 'image|max:1024',
        'facebook' => 'required|string|max:500',
        'twitter' => 'required|string|max:500',
        'linkedin' => 'required|string|max:500',

    ];

   
    public function render()
    {
        return view('livewire.confe-form');
    }
    public function store(){
        $this->validate();

        $dirphoto=$this->photo->store('photo','public');
        

        Confe::create([
            'name'=>$this->name,
            'photo'=>$dirphoto,
            'description'=>$this->description,
            'facebook'=>$this->facebook,
            'twitter'=>$this->twitter,
            'linkedin'=>$this->linkedin
        ]);
        session()->flash('message', '¡Agregado con éxito!  👍');

    }
}
