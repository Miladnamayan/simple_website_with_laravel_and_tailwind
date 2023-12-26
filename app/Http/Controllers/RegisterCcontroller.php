<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterCcontroller extends Controller
{
    public function welcome(){
        session(['visited_miladgram' => true]);
        return view('Registers.welcome');
    }

    public function register1(){
        return view('Registers.register1');
    }

    public function register1form(RegisterRequest $request){
        session(['entered_email'=>true]);
        return redirect()->route('register2');
    }

    public function register2(){
        return view('Registers.register2');
    }

    public function register2form(RegisterRequest $request){

        $request->session()->put('name', $request->name);
        $request->session()->put('password', $request->password);
        $request->session()->put('image', $request->file('image')->store('avatars'));
        session(['entered_name'=>true]);

        // session(['entered_name'=>true]);
        return redirect()->route('register3');
    }

    public function register3(){
        return view('Registers.register3');
    }

    public function register3form(Request $request){
        $email = $request->session()->get('email');
        $image = $request->session()->get('image');
        $name = $request->session()->get('name');
        $password = $request->session()->get('password');
        $role =$request->input('role');

        User::updateOrCreate(['email' => $email],[
            'email' => $email,
            'image' => $image,
            'name' => $name,
            'password' => $password,
            'role' => $role,
        ]);

        session(['entered_role' => true]);

        return redirect()->route('register4');
    }

    public function register4(){
        $user = User::
        latest()->first();
        return view('Registers.register4',['user'=> $user]);
        session()->flush();

    }
}
