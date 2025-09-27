<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            $user->created_by = ($user->creator && $user->creator->user_type == 1) 
                                    ? $user->creator->name 
                                    : 'Self Registered';
            return $user;
        });
        return view('admin.user-active.pending-agent-user', compact('pendingAgentUsers'));
    }

    // Function to show pending student users
    public function pendingStudentUser()
    {
       $pendingStudentUsers = User::where('user_type', 3)
            ->where('user_status', 1)              
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($user) {
            $user->user_type = $user->user_type == 3 ? 'Student' : 'Agent';
             $user->created_by = ($user->creator && in_array($user->creator->user_type, [1, 2]))
                                    ? $user->creator->name
                                    : 'Self Registered';
            return $user;
        });
        return view('admin.user-active.pending-student-user', compact('pendingStudentUsers'));
    }
    
    // Function to show active agent users
    public function activeAgentUser()
    {
      $activeAgentUsers = User::with('creator')
        ->where('user_type', 2)
        ->where('user_status', 2)              
        ->orderBy('id', 'desc')
        ->get()
        ->map(function ($user) {
            $user->user_type = $user->user_type == 2 ? 'Agent' : 'Student';
            $user->created_by = ($user->creator && $user->creator->user_type == 1) 
                                    ? $user->creator->name 
                                    : 'Self Registered';
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

    // Function to create new  Agent User
    public function saveAgent(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|unique:users,email',
            'phone'        => 'required|string|unique:users,phone',
            'organization_name' => 'required|string|max:255',
            'password'     => 'required|string|min:8',
        ]);

        DB::beginTransaction();

        try {
            $existingUser = User::where('email', $request->email)
                ->orWhere('phone', $request->phone)
                ->first();

            if ($existingUser) {
                DB::rollBack();
                Alert::error('Error', 'Email or phone number already exists');
                return redirect()->back()->withInput();
            }

            User::create([
                'name'         => $request->name,
                'email'        => $request->email,
                'phone'        => $request->phone,
                'organization_name' => $request->organization_name,
                'password'     => Hash::make($request->password),
                'user_type'    => 2,
                'created_by'   => Auth::id(),
            ]);

            DB::commit();
            Alert::success('Success', 'Agent created successfully');
            return redirect()->route('pending_agent_user');
        } catch (\Exception $e) {
            // dd($e);
            DB::rollBack();
            Alert::error('Error', 'Failed to add agent. Please try again.');
            return redirect()->back()->withInput();
        }
    }
}
