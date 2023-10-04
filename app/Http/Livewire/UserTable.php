<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $statusUpdate = false;
    protected $listeners = ['userStored'];

    public function render()
    {
        return view('livewire.user-table',[
            'users' => User::all()
        ]);
    }

    public function getUserByID($id){
       $user =  User::find($id)->first();
       $this->emit('getUserByID',$user);
       $this->statusUpdate = true;
    }

    public function userStored($user){}
}
