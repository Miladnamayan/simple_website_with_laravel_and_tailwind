<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        session()->flush();
        return view('Registers.login');
    }

    public function loginform(Request $request){
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8'
        ]);
    }
}
