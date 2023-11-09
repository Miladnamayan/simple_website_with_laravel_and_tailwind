<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\RegisterTwo;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    

    // public function getEmails($id)
    public function getEmails(Request $request)
{
//     $emails = Email::find($id);
//     // return view('register3', ['email' => email]);
//     // return view('register3', ["$email"->email]);
//     return view('email',compact('emails'));
//     return view('register3',compact('emails'));
//     // return  $email->email;
//     // dd($email1->email) ;
        // $_SESSION= session()->get('email');
        $_SESSION= session()->all();

        // $email = $request->input('email');
        // session(['email' => $email]);
    //    dd($email);
       dd( $_SESSION);
}


    // public function register2(Request $REQUEST){
    //     $REQUEST->all();
    //     return view('register2');
    // // }
    // public function register2session(){
    //       session()->all();
    // }

    // public function register2form(Request $request){

    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $imageName = time().'.'.$request->image->extension();
    //     $request->image->move(public_path('images'), $imageName);

    //   RegisterTwo::create([
    //     'file_path' => $imageName,
    //     'name' => $request['name'],
    //     'password' => Hash::make($request['password']),
    //   ]);
    //   return view
    //   ('register3');
    // }

    // public function register3(){
    //    return view('register3');
    // }

    // public function register4(){
    //  return view('register4');
    // }








}
