<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profiles(Request $request){

        $user = Auth::user();
        // $posts = Post::get()->where('user_id' , '=' , $user->id);
        $posts = $user->posts;
        // $posts = Post::orderBy('created_at', 'desc')->paginate(8);


        return view('Home.profiles', ['posts'=> $posts,'user'=> $user]);
        session()->flush();
    }

    public function profilesform(Request $request){

    }

}
