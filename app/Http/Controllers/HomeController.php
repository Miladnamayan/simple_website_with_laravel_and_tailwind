<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function home(){
    //     session(['visited_home' => true]);
    //     $categories = Category::get();
    //     $posts = Post::query()->where('post_status', 1);
    //     if (request('term')) {
    //         $posts->where('title', 'Like', '%' . request('term') . '%');
    //     }

    //     return view('Home.home', ['posts'=> $posts->orderBy('created_at', 'DESC')->paginate(9),'categories'=> $categories]);
    // }
    public function home()
    {
    session(['visited_home' => true]);
    $categories = Category::get();
    $posts = Post::query()->where('post_status', 1);

    $sort = request()->get('sort');
    if ($sort == 'likes') {
        $posts->withCount('likes')->orderBy('likes_count', 'desc');
    } elseif ($sort == 'views') {
        $posts->withCount('views')->orderBy('views_count', 'desc');
    }

    if (request('term')) {
        $posts->where('title', 'Like', '%' . request('term') . '%');
    }

    return view('Home.home', ['posts'=> $posts->orderBy('created_at', 'DESC')->paginate(9),'categories'=> $categories]);
    }



}
