<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function getCategory($id) {
    //     $categories = Category::get();
    //     $category = Category::find($id);
    //     if($category !== null){
    //         $posts = $category->posts()->orderBy('created_at', 'DESC')->paginate(9);
    //         return view('Home.home', ['posts'=> $posts,'categories'=> $categories]);
    //     }
    // }

    public function getCategory(Category $category) {
        $categories = Category::get();
        $posts = $category->posts()->orderBy('created_at', 'DESC')->paginate(9);
        return view('Home.home', ['posts'=> $posts,'categories'=> $categories]);
    }



}
