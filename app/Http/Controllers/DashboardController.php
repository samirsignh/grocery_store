<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main_dashboard_view()
    {
        return view('main_dashboard');
    }
}
