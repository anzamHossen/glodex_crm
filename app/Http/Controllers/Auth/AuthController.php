<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.sign-in');
    }

    public function signUp()
    {
        return view('auth.sign-up');
    }
}
