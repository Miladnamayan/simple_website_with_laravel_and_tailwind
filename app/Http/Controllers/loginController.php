<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        return view('Registers.login');
    }

    public function loginform(LoginRequest $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|email',
        //     'password' => 'required|min:8',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->route('login')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        if (Auth::attempt($request->only('email', 'password'))) {
            session()->put('user', Auth::user());
            return redirect()->intended('/home');
        }
        return back()->with('error', 'Login failed');
    }


}
