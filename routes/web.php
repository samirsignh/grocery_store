<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('signin');
});

Route::post('main-dashboard', [DashboardController::class, 'main_dashboard_view'])->name('main_dashboard_view');
