<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.sign-in');
    }

     // Funtion to use case for login different user
    protected function redirectToDashboard($userType)
    {
        switch ($userType) {
            case 1: // Admin
                Alert::success('Success', 'Admin login successful');
                return redirect()->route('admin_dashboard'); // Redirect to the Admin dashboard
            case 2: // Agent
                Alert::success('Success', 'Agent login successful');
                return redirect()->route('agent_dashboard'); // Adjust to your agent dashboard route
            case 3: // Student
                Alert::success('Success', 'Student login successful');
                return redirect()->route('student_dashboard'); // Adjust to your student dashboard route
            default:
                return redirect()->route('sign_in')->with('error', 'User type not recognized');
        }
    }

    // Function to handle login
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email'    => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            try {
                if (Auth::attempt($credentials)) {
                    $user = Auth::user();

                    // Redirect admin
                    if ($user->user_type == 1) {
                        $request->session()->regenerate();
                        return $this->redirectToDashboard($user->user_type);
                    }

                    // Redirect agent/student (no user_status check anymore)
                    if (in_array($user->user_type, [2, 3])) {
                        $request->session()->regenerate();
                        return $this->redirectToDashboard($user->user_type);
                    }

                    // Default: logout if not matched
                    Auth::logout();
                    // Alert::error('Error', 'Your account is not approved for login.');

                } else {
                    return redirect()->back()->with('error', 'Invalid email or password.');
                }
            } catch (Exception $e) {
                Log::error('Login error: ' . $e->getMessage());
                return redirect()->back()->with('error', 'An error occurred. Please try again.');
            }
        } else {
            return view('auth.sign-in');
        }
    }

    // function to show sign-up form 
    public function signUp()
    {
        return view('auth.sign-up');
    }

    // Funttion to save sign-up user
    public function saveSignup(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',  
            'email'     => 'required|email',
            'phone'     => 'required|string|max:20',
            'user_type' => 'required|in:2,3', // Only allow 'Agent' (2) and 'Student' (3)
            'password'  => 'required|string|min:8',
        ]);

        $existingUser = User::where('phone', $request->phone)
            ->orWhere('email', $request->email)
            ->first();

        if ($existingUser) {
            // Alert::error('Error', 'A user with this phone number or email already exists.');
            return redirect()->back()->withInput();
        }

        // $request->user_type == 2 ? 'Agent' : 'Student';

        DB::beginTransaction();

        try {
            $fullName = $request->first_name . ' ' . $request->last_name;
            $user = User::create([
                'name'              => $fullName,
                'email'             => $request->email,
                'phone'             => $request->phone,
                'user_type'         => $request->user_type,
                'organization_name' => $request->organization_name,
                'password'          => Hash::make($request->password),
                'created_by'        => null,
            ]);
            $user->created_by = $user->id;
            $user->save();
              
            DB::commit();
            // Alert::success('Success', 'Thanks for registration. Please wait for admin approval wait few minutes.');
            return redirect()->route('sign_in');

        } catch (\Exception $e) {

            DB::rollBack();
            // dd($e);
            // Alert::error('Error', 'Registration failed. Please try again.');
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('sign_in');
    }
}
