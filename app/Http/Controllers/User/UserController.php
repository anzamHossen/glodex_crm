<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Handler\ImageHandlerController;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    protected $imageHandler;

    // Functio to call image handler
    public function __construct(ImageHandlerController $imageHandler)
    {
        $this->imageHandler = $imageHandler;
    }

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

    // Admin user profile view
    public function adminUserProfile()
    {
        $user  = auth()->user();
        return view('user.admin-user-profile', compact('user'));    
    }

    // Update admin profile
    public function updateAdminProfile(Request $request)
    {
        $request->validate([
            'name'                => 'required|string|max:255',
            'phone'               => 'required|string|max:20',
            'email'               => 'required|email|max:255',
            'dob'                 => 'required|date',
            'marital_status'      => 'required',
            'gender'              => 'required',
            'organization_name'   => 'required',
            'address'             => 'required',
            'company_description' => 'required',
        ]);

        DB::beginTransaction();

        try {
            $user = auth()->user();
            $user->name                = $request->name;
            $user->phone               = $request->phone;
            $user->email               = $request->email;
            $user->dob                 = $request->dob;
            $user->marital_status      = $request->marital_status;
            $user->gender              = $request->gender;
            $user->organization_name   = $request->organization_name;
            $user->address             = $request->address;
            $user->company_description = $request->company_description;
            if ($request->hasFile('profile_photo')) {
                if ($user->profile_photo) {
                    $this->imageHandler->deleteImage($user->profile_photo);
                }
                $file = $request->file('profile_photo');
                $filePath = $this->imageHandler->profilePhoto($file, 'profile_photo');
                $user->profile_photo = $filePath;
            }

            if ($request->hasFile('company_logo')) {
                if ($user->company_logo) {
                    $this->imageHandler->deleteImage($user->company_logo);
                }
                $file = $request->file('company_logo');
                $filePath = $this->imageHandler->companyLogo($file, 'company_logo');
                $user->company_logo = $filePath;
            }

            if ($request->hasFile('favicon')) {
                if ($user->favicon) {
                    $this->imageHandler->deleteImage($user->favicon);
                }
                $file = $request->file('favicon');
                $filePath = $this->imageHandler->faviconPhoto($file, 'favicon');
                $user->favicon = $filePath;
            }

            // Save all updates
            $user->save();

            DB::commit();
            alert()->success('Success', 'Profile updated successfully!');
            return redirect()->back();

        } catch (\Exception $e) {
            DB::rollBack();
            alert()->error('Error', 'Something went wrong: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
