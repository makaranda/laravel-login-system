<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController2 extends Controller
{
    // Show the login form (GET request)
    public function showLoginForm()
    {
        return view('pages.login.index');
    }

    // Handle login form submission (POST request)
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Handle logout (POST request)
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
