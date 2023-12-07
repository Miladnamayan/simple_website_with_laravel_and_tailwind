<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewPostController extends Controller
{
   public function view(){
        // $post = Post::latest()->first();
        $categories=Category::get();
        return view('Home.newpost', ['categories'=> $categories]);
    }

    public function create(Request $request){
        // dd($request);
        $user = Auth::user();
        $post = $user->posts;
        $picture= $request->file('picture')->store('picture');
        Post::updateOrCreate([
            'user_id'=> $user->id,
            'title'=>  $request->title,
            'body'=> $request->body,
            'picture'=> $picture,
            'category_id'=> $request->category_id,
        ]);
        return redirect()->route('profiles.view',['post'=> $post]);
    }

}
