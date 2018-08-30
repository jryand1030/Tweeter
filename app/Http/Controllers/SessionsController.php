<?php

namespace App\Http\Controllers;
use\App\User;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct() {

     $this->middleware('guest',['except' => 'destroy']);
    }


    public function create() {
        
        return view('posts');
    }

    public function store() {

        if (auth()->attempt(request(['email','password']))) {
            
            return redirect('posts');
    }
           
            return back()->withErrors(['please check your password']);

}


    public function destroy() {

        auth()->logout();

        return redirect('/');
    }
}
