<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likes(Post $post)
    {
        $post->likes()->firstOrCreate([
            'user_id' => Auth::user()->id
        ]);
        return back();
    }
}
