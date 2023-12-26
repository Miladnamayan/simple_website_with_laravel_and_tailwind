<?php

namespace App\Http\Controllers;

use App\Events\CreatePost;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function manager(){
        $users = User::get();
        $userCount = User::count();
        $newUsersCount = User::createdToday()->count();
        $postCount = Post::count();
        $newpostsCount = Post::createdToday()->count();
        return view('Home.manager', compact('users','userCount','newUsersCount','postCount','newpostsCount'));    }
}
