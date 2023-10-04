<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $name,$email,$password;
    public function render()
    {
        return view('livewire.user-create');
    }

    public function store(){

        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

       $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password' => \bcrypt($this->password),
        ]);
        $this->_reset();
        $this->emit('userStored',$user);
        \session()->flash('success','User created');
    }



    private function _reset(){
        $this->name = null;
        $this->email = null;
        $this->password = null;
    }
}
