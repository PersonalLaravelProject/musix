<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        
      $user = new User;
      $user->username = $request->username;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);


      $user ->save();

    }
}
