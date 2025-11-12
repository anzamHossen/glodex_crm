<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Application;
use App\Models\Admin\Country;
use App\Models\Admin\Course;
use App\Models\Admin\StudentInfo;
use App\Models\Admin\University;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalCountries    = Country::count();
        $totalUniversities = University::count();
        $totalCourses      = Course::count();
        $totalStudents     = StudentInfo::count();
        $totalActiveAgent  = User::where('user_type', 2)->where('user_status', 2)->count();
        $totalApplications = Application::count();
        $totalVisaGranted  = Application::where('status', 10)->count();
        $totalVisaRejected = Application::where('status', 12)->count();
        return view('dashboard.admin-dashboard', compact('totalCountries','totalUniversities','totalCourses','totalStudents','totalActiveAgent',
        'totalApplications','totalVisaGranted','totalVisaRejected'));
    }
}
