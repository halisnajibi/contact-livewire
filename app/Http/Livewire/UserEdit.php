<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserEdit extends Component
{
    public $name,$email,$id;
    protected $listeners = ['getContactById'];
    public function render()
    {
        return view('livewire.user-edit');
    }

    public function getContactById($user){
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->id = $user['id'];
    }
}
