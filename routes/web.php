<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\UserActiveController;
use App\Http\Controllers\Agent\AgentDashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Student\StudentDashboardController;
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

});

Route::prefix('agent')->middleware(['agent'])->group(function () {
    Route::get('/agent-dashboard', [AgentDashboardController::class, 'agentDashboard'])->name('agent_dashboard');
});

Route::prefix('student')->middleware(['student'])->group(function () {
    Route::get('/student-dashboard', [StudentDashboardController::class, 'studentDashboard'])->name('student_dashboard');
});


