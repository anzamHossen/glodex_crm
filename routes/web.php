<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'signIn'])->name('sign_in');
Route::get('/sign-up', [AuthController::class, 'signUp'])->name('sign_up');
Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('home');
