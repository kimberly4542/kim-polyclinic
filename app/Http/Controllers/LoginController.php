<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('cityadmin.login2');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('cityadmin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        } else {
            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        Auth::guard('cityadmin')->logout();
        return redirect('/admin');
    }
}
