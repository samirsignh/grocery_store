<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SigninController extends Controller
{
    public function signin_view()
    {
        return view('signin');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'user_id' => "required|string",
            'password' => "required|string",
        ]);

        if(Auth::attempt(['user_id' => $request->user_id, 'password' => $request->password])){
            $user = Auth::user();
            if($user->role_type == 1){
                $request->session()->regenerate();
                return redirect()->route('main_dashboard_view')->with('success', 'Logged in Successfully!');
            }
            $request->session()->regenerate();
        }else{
            return redirect()->route('signin_view')->with('error', 'User id or Password not matched !!');
        }
    }

    public function userLogout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->invalidate();
        return redirect()->route('signin_view')->with('success', 'Logged Out Successfully!');
    }
}
