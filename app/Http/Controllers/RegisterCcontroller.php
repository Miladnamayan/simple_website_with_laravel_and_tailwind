<?php

namespace App\Http\Controllers;

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

    public function register1form(Request $request){
        $request->validate([
            'email' => 'required|email|max:255|unique:users,email',
        ]);
        $request->session()->put('email', $request->email);


        session(['entered_email' => true]);

        return redirect()->route('register2');
    }

    public function register2(){
        return view('Registers.register2');
    }

    public function register2form(Request $request){
        $request->validate([
            'image' => 'required|image|unique:users,image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|min:4|max:20',
            'password' => 'required|confirmed|min:8',
        ]);
        $request->session()->put('name', $request->name);
        $request->session()->put('password', $request->password);
        $request->session()->put('image', $request->file('image')->store('avatars'));

        session(['entered_name' => true]);
        return redirect()->route('register3');
    }

    public function register3(){
        return view('Registers.register3');
    }

    public function register3form(Request $request){
        $email = $request->session()->get('email');
        $image = $request->session()->get('image');
        $name = $request->session()->get('name');
        $request->session()->get('password');
        $role =$request->input('role');

        $user=User::updateOrCreate(['email' => $email],[
                'email' => $email,
                'image' => $image,
                'name' => $name,
                'password' => Hash::make($request['password']),
                'role' => $role,
            ]);
        $user->sendEmailVerificationNotification();

        session(['entered_role' => true]);

        return redirect()->route('register4');
    }

    public function register4(){
        $user = User::
        latest()->first();
        session()->flush();
        return view('Registers.register4',['user'=> $user]);

    }
    //todo redirect to first step if user is null
}
