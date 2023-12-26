<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewPostController extends Controller
{



   public function view( ){
    $user = Auth::user();

        $categories=Category::get();
        if($user->accept_status == 1) {
            return view('Home.newpost', ['categories'=> $categories]);
        }else{
            return redirect()->back()->with('message', 'To create a new post, you must get permission from the administrator.');
        }

    }

    public function create(PostRequest $request){
        $user = Auth::user();
        $picture= $request->file('picture')->store('picture');
        Post::updateOrCreate([
            'user_id'=> $user->id,
            'title'=>  $request->title,
            'body'=> $request->body,
            'picture'=> $picture,
            'category_id'=> $request->category_id,
        ]);


        return redirect()->route('profiles.view',['post'=> $user->posts]);
    }

}
