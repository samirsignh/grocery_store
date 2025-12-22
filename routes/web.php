<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\master\RoleMasterController;

Route::get('/', function () {
    return view('signin');
});

Route::post('proceed-login', [SigninController::class, 'doLogin'])->name('doLogin');
Route::get('login-page', [SigninController::class, 'signin_view'])->name('signin_view');

Route::middleware(['auth.user'])->group(function () {
    Route::get('main-dashboard', [DashboardController::class, 'main_dashboard_view'])->name('main_dashboard_view');
    Route::get('user-logout', [SigninController::class, 'userLogout'])->name('userLogout');
});

Route::middleware(['auth.user'])->group(function () {
    Route::get('roles', [RoleMasterController::class, 'role_list'])->name('role_list');
    Route::post('roles', [RoleMasterController::class, 'store_role_details'])->name('store_role_details');
});