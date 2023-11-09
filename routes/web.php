<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
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
//End Register
/////////////////////////////////////

// Login
route::get('/login',[loginController:: class, 'login'])->name('login')->middleware('check.visited.miladgram');
route::post('/login',[RegisterCcontroller:: class, 'loginform'])->name('loginform');
//End Login


// Route::get('/register-4', [HomeController::class, 'getEmails']);

// route::get('/register-3',[HomeController:: class, 'register2session']);
// route::post('/register-3',[HomeController:: class, 'register2form'])->name('register2form');

// Route::get('/register-3/{id}', [HomeController::class, 'getEmails']);


// route::post('/register1',[HomeController:: class, 'register1form'])->name('register1form');
// route::post('/register1',[HomeController::class,'register1form'])->name('register1.form');

// Route::post('/register1', [HomeController::class, 'register1form'])->name('register1form');


// route::post('/register1',[HomeController:: class, 'register1form'])->name("register1.form");
// route::post('/register1',[HomeController:: class, 'register2form'])->name('register2.form');
// route::get('/register2',[HomeController:: class, 'register2'])->name('register2');
// route::post('/register2',[HomeController:: class, 'register2form'])->name('register2.form');



// route::get('/register3',[HomeController:: class, 'register3'])->name('register3');
// route::get('/register4',[HomeController:: class, 'register4'])->name('register4');


// Auth::routes();
//
//->middleware('ValidEmail')
