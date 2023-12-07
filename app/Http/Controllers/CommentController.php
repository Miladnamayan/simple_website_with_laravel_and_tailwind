<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(Request $request, Post $post)  {
        $post->comments()->create([
            'user_id'=> Auth::user()->id,
            'content'=> $request->content
        ]);
        return back();
    }

    public function list(Post $post){
        $comments = $post->comments()->with('post','user')->orderBy('created_at')->get();
        return view('Home.comments', [
            'comments'=> $comments
        ]);
    }
}
