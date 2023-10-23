<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcomePage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register1', function () {
    return view('register1');
});
Route::get('/register2', function () {
    return view('register2');
});
Route::get('/register3', function () {
    return view('register3');
});
Route::get('/register4', function () {
    return view('register4');
});





Route::get('/home', function () {
    return view('home');
});
