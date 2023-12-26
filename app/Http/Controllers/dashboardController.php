<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        $categories = Category::get();
        $posts=Post::get();

        return view('Home.dashboard', ['posts'=> $posts,'categories'=> $categories]);
    }
}
