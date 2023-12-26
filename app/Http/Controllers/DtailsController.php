<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DtailsController extends Controller
{
    public function view(Post $post){
        if (Gate::allows('view', $post)) {
            return view('Home.posts', ['post' => $post]);
        }

    }

    public function delete(Post $post){
        // if (Gate::allows('delete_post', $post)) {
        if (Gate::allows('delete', $post)) {
            $post->delete();
            $user = Auth::user();
            $posts = $user->posts;
            return redirect()->route('profiles.view', ['posts' => $posts,'user'=> $user]);
        }

    }

    public function view_update(Post $post){
        if (Gate::allows('update', $post)) {
            return view('Home.updatepost', ['post' => $post]);
        }
    }

    public function action_update(Request $request, Post $post){
        $title = $request->exists('title') && $request->filled('title') ? $request->get('title') : $post->title;
        $body = $request->exists('body') && $request->filled('body') ? $request->get('body') : $post->body;
        $post->update([
            'title'=> $title,
            'body'=> $body,
        ]);
        return redirect()->route('profiles.view',['post'=> $post]);
    }
}
