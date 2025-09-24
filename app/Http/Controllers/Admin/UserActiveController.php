<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserActiveController extends Controller
{
    // Function to show pending agent users
    public function pendingAgentUser()
    {
        $pendingUsers = User::whereIn('user_type', [2])
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($user) {
                $user->user_type = $user->user_type == 2 ? 'Agent' : 'Student';
                return $user;
            });
        return view('admin.user-active.pending-agent-user', compact('pendingUsers'));
    }
    
    // Function to update user status
    public function updateUserStatus($id)
    {
        $user = User::findOrFail($id);
        $user->user_status = $user->user_status == 1 ? 2 : 1;
        $user->save();

        Alert::success('Success', 'User status update Successfully');
        return redirect()->back();
    }
}
