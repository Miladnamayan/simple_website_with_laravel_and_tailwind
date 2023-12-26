<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function view(Post $post){

        $post->Views()->firstOrCreate([
            'post_id' => $post->id,
            'user_id' => Auth::user()->id
        ]);

        return view('Home.posts', ['post' => $post ]);
    }

}


