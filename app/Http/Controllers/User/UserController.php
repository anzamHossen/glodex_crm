<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile($id)
    {
        $user = User::findOrFail($id);
        return view('user.user-profile', compact('user'));
    }
}
