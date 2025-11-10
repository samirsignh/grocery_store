<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function main_dashboard_view()
    {
        return view('main_dashboard');
    }
}
