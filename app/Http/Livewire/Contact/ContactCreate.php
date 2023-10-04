<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name,$email,$phone;
    public function render()
    {
        return view('livewire.contact.contact-create');
    }

    public function store(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:contacts,email',
            'phone' => 'required|min:6'
        ]);

       $contact = Contact::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone' => $this->phone
        ]);
        $this->emit('storedContact');
        \session()->flash('success','Contact created');
        $this->_reset();
    }

    private function _reset(){
        $this->name = \null;
        $this->email = \null;
        $this->phone = \null;
    }
}
