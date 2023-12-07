<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterCcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get('/miladgram',[RegisterCcontroller:: class, 'welcome'])->name('welcome');
//////////////////////////////////////

// Register
route::get('/register-1',[RegisterCcontroller:: class, 'register1'])->name('register1')->middleware('check.visited.miladgram');
route::post('/register-1',[RegisterCcontroller:: class, 'register1form'])->name('register1form');

route::get('/register-2',[RegisterCcontroller:: class, 'register2'])->name('register2')->middleware('check.entered.email');
route::post('/register-2',[RegisterCcontroller:: class, 'register2form'])->name('register2form');

route::get('/register-3',[RegisterCcontroller:: class, 'register3'])->name('register3')->middleware('check.entered.name');
route::post('/register-3',[RegisterCcontroller:: class, 'register3form'])->name('register3form');

route::get('/register-4',[RegisterCcontroller:: class, 'register4'])->name('register4')->middleware('check.entered.role');
route::post('/register-4',[RegisterCcontroller:: class, 'register4form'])->name('register4form');
//End Register/////////////////////////////////////

// Log
route::get('/login',[LoginController:: class, 'login'])->name('login');
route::post('/login',[LoginController:: class, 'loginform'])->name('loginform');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
//End Log/////////////////////////////////////

// Home
Route::prefix('home')->name('home.')->group(function (){
    route::get('/',[HomeController:: class, 'home'])->name('view');
    route::get('/{id}/category', [CategoryController::class, 'getCategory'])->name('Category');
});
// End Home/////////////////////////////////////

// posts
Route::prefix('posts')->name('posts.')->group(function (){
    route::get('/{post}/view',[PostController:: class, 'view'])->name('view');
    // comments
        Route::prefix('/{post}/comments')->name('comments.')->group(function (){
            route::get('/',[CommentController:: class, 'list'])->name('list');
            route::post('/',[CommentController:: class, 'create'])->name('create');
        });
    //likes
        Route::post('/{post}/likes', [LikeController::class, 'likes'])->name('likes');
});
// End posts/////////////////////////////////////

// Profile
Route::prefix('profiles')->name('profiles.')->group(function (){
    route::get('/',[ProfileController:: class, 'profiles'])->middleware('check.visited.home')->name('view');
    route::post('/profiles',[ProfileController:: class, 'profilesform'])->name('profilesform');
    // newpost
    Route::prefix('/newpost')->name('newpost.')->group(function (){
        route::get('/',[NewPostController:: class, 'view'])->name('view');
        route::post('/',[NewPostController:: class, 'create'])->name('create');
    });
});
//End Profile/////////////////////////////////////

// admin
route::get('/admin',[adminController:: class, 'admin'])->name('admin');
// End admin/////////////////////////////////////

// Home

// route::get('/home',[HomeController:: class, 'home'])->name('home')->middleware('auth');


// Route::middleware('auth')->group(function(){
//     Route::get('dashboard', function(){
//         return 'dashboard';
//     });
// });

// test

route::get('/cards',[HomeController:: class, 'cards'])->name('cards');

route::get('/admins',[HomeController:: class, 'admin'])->name('admin');




// اگه مثلا بخواهی لایک هایی که این کامنت میخوره رو ببینی
// یا میتونی بگی پاسخ هایی که به کامنت ها داده میشود
            // route::get('/{comment}/view',[CommentController:: class, 'view'])->name('view');php

