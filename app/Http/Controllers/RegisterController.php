<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;




class RegisterController extends Controller
{
    public function create() {
        
        return view('auth.registration');
    }

    public function store() {

        $this->validate(request(), [
            'name'=> 'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $data=\request()->all();

        $user=User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password']),
        ]);

        Profile::create([
            'user_id'=>$user->id
        ]);

        auth()->login($user);

        return redirect('/profile/edit');
    }
}
