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
       $pendingAgentUsers = User::where('user_type', 2)
            ->where('user_status', 1)              
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($user) {
                $user->user_type = $user->user_type == 2 ? 'Agent' : 'Student';
                return $user;
            });
        return view('admin.user-active.pending-agent-user', compact('pendingAgentUsers'));
    }
    public function activeAgentUser()
    {
       $activeAgentUsers = User::where('user_type', 2)
            ->where('user_status', 2)              
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($user) {
                $user->user_type = $user->user_type == 2 ? 'Agent' : 'Student';
                return $user;
            });
        return view('admin.user-active.active-agent-user', compact('activeAgentUsers'));
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
