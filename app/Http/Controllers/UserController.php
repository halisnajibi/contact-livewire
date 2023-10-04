<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function show($id){
    return \view('users.show',[
        'user' => User::find($id)->first()
    ]);
  }
}
