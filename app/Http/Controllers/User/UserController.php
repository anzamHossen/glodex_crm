<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function userProfile($id)
    {
        $user = User::findOrFail($id);
        return view('user.user-profile', compact('user'));
    }

    // Admin change password view
    public function adminChangePassword()
    {
        $user  = auth()->user();
        return view('user.admin-change-password', compact('user'));
    }

    // Update admin password
    public function updateAdminPassword(Request $request)
    {
        $request->validate([
            'current_password'      => 'required|string',
            'new_password'          => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            Alert::error('Error', 'The current password does not match our records.');
            return redirect()->back();
        }

        DB::beginTransaction();
        try {
            $user = auth()->user();
            $user->password = Hash::make($request->new_password);
            $user->save();

            DB::commit();

            Alert::success('Success', 'Password updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Error', 'An error occurred while updating the password. Please try again.');
            return redirect()->back();
        }
    }
}
