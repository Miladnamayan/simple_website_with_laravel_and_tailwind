<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        session(['visited_home' => true]);
        $categories = Category::get();
        $posts = Post::query();
        if (request('term')) {
            $posts->where('title', 'Like', '%' . request('term') . '%');
        }
        return view('Home.home', ['posts'=> $posts->orderBy('created_at', 'DESC')->paginate(9),'categories'=> $categories]);
    }
}
