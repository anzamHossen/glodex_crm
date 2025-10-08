<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\UniversityController;
use App\Http\Controllers\Admin\UserActiveController;
use App\Http\Controllers\Agent\AgentDashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\StudentInfoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'signIn'])->name('sign_in');
Route::post('login', [AuthController::class, 'login'])->middleware('authenticate')->name('auth_login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/sign-up', [AuthController::class, 'signUp'])->name('sign_up');
Route::post('/save-sign-up', [AuthController::class, 'saveSignup'])->name('save_sign_up');
Route::delete('/delete-user/{id}', [AuthController::class, 'deleteUser'])->name('delete_user');

Route::prefix('admin')->middleware(['admin', 'auth'])->group(function () {
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('admin_dashboard');

    // Route for active agent user
    Route::controller(UserActiveController::class)->group(function () {
        Route::get('/pending-agent-user',  'pendingAgentUser')->name('pending_agent_user');
        Route::get('/pending-student-user',  'pendingStudentUser')->name('pending_student_user');
        Route::get('/update-user-status/{id}', 'updateUserStatus')->name('update_user_status');
        Route::get('/active-agent-user',  'activeAgentUser')->name('active_agent_user');
        Route::post('/save-agent', 'saveAgent')->name('save_agent');
    });

    // Route for country
     Route::controller(CountryController::class)->group(function () {
        Route::get('/country-list', 'countryList')->name('country_list');
        Route::get('/add-new-country', 'addCountry')->name('add_new_country');
        Route::post('/save-new-country', 'saveCountry')->name('save_new_country');
        Route::get('/edit-country/{id}', 'editCountry')->name('edit_country');
        Route::post('/update-country/{id}', 'updateCountry')->name('update_country');
        Route::delete('/delete-country/{id}',  'deleteCountry')->name('delete_country');
    });

    // Route for university
    Route::controller(UniversityController::class)->group(function () {
        Route::get('/university-list', 'universityList')->name('university_list');
        Route::get('/add-new-university', 'addUniversity')->name('add_new_university');
        Route::post('/save-new-university', 'saveUniversity')->name('save_new_university');
        Route::get('/edit-university/{id}', 'editUniversity')->name('edit_university');
        Route::post('/update-university/{id}', 'updateUniversity')->name('update_university');
        Route::delete('/delete-university/{id}',  'deleteUniversity')->name('delete_university');
       
    });

    // Route for course
    Route::controller(CourseController::class)->group(function () {
        Route::get('/course-list', 'courseList')->name('course_list');
        Route::get('/add-new-course', 'addCourse')->name('add_new_course');
        Route::post('/save-new-course', 'saveCourse')->name('save_new_course');
        Route::get('/edit-course/{id}', 'editCourse')->name('edit_course');
        Route::post('/update-course/{id}', 'updateCourse')->name('update_course');
        Route::delete('/delete-course/{id}',  'deleteCourse')->name('delete_course');
    });

    // Route for course
    Route::controller(StudentInfoController::class)->group(function () {
        Route::get('/add-new-student', 'addNewStudent')->name('add_new_student');
        Route::post('/save-new-student', 'saveNewStudent')->name('save_new_student');
    });

});

Route::prefix('agent')->middleware(['agent'])->group(function () {
    Route::get('/agent-dashboard', [AgentDashboardController::class, 'agentDashboard'])->name('agent_dashboard');
});

Route::prefix('student')->middleware(['student'])->group(function () {
    Route::get('/student-dashboard', [StudentDashboardController::class, 'studentDashboard'])->name('student_dashboard');
});


