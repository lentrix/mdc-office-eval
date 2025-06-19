<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login-form');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('user_name', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Logged in successfully.');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('welcome')->with('success', 'Logged out successfully.');
    }
}
