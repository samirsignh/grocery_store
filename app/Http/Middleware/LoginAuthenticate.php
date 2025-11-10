<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class LoginAuthenticate
{
    public function handle(Request $request, Closure $next): Response
    {
        // Get current route name
        $currentRoute = $request->route()->getName();

        // Define routes that should NOT trigger the middleware redirect
        $excludedRoutes = ['signin_view', 'doLogin'];

        if (!Auth::check() && !in_array($currentRoute, $excludedRoutes)) {
            return redirect()->route('signin_view');
        }

        // Prevent logged-in users from revisiting the login page
        if (Auth::check() && in_array($currentRoute, $excludedRoutes)) {
            return redirect()->route('main_dashboard_view');
        }

        return $next($request);
    }
}
