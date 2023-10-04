<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;
class ContactEdit extends Component
{
    public $name, $email, $phone,$idContact;
    protected $listeners = [
        'getContactByID' => 'edit'
    ];
    public function render()
    {
        return view('livewire.contact.contact-edit');
    }

    public function edit($contact){
        $this->name = $contact["name"];
        $this->email = $contact["email"];
        $this->phone = $contact["phone"];
        $this->idContact = $contact["id"];
    }

    public function update(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:contacts,email',
            'phone' => 'required|min:6'
        ]);
        // if($this->idContact){
        //     $contact = Contact::find($idContact);
        //     $contact->update([
        //         'name' => $this->name,
        //         'email' => $this->email,
        //         'phone' => $this->phone,
        //     ]);
        //     $this->_reset();
        // }
      

       $contact = Contact::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone' => $this->phone
        ]);
    $contact = Contact::where('id',$this->idContact)->update([
         'name'=>$this->name,
            'email'=>$this->email,
            'phone' => $this->phone
    ]);
        $this->emit('updatedContact');
        \session()->flash('success','Contact updated');
        $this->_reset();
    }

    private function _reset(){
        $this->name = \null;
        $this->email = \null;
        $this->phone = \null;
        $this->idContact= \null;
    }
}
