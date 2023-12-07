<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        // session()->delete('user');
        return redirect()->route('login');
    }
}
