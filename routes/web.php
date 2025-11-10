<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SigninController;

Route::get('/', function () {
    return view('signin');
});

Route::post('proceed-login', [SigninController::class, 'doLogin'])->name('doLogin');
Route::get('login-page', [SigninController::class, 'signin_view'])->name('signin_view');

Route::middleware(['auth.user'])->group(function () {
    Route::get('main-dashboard', [DashboardController::class, 'main_dashboard_view'])->name('main_dashboard_view');
    Route::get('user-logout', [SigninController::class, 'userLogout'])->name('userLogout');
});

