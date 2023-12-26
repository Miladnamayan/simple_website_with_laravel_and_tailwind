<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function postview(Post $post){
        $post->PostView()->firstOrCreate([
            'post_id' => $post->id,
            'user_id' => Auth::user()->id
        ]);
    }
}
