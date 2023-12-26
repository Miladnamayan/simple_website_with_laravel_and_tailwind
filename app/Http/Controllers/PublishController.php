<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublishController extends Controller
{

    public function publish_post(Request $request,Post $post)
    {
        $isChecked = $request->has('post_status') ? 1 : 0;
        $post->update([
            'post_status' => $isChecked,

        ]);
        return back();
    }



}
