<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hospital;

class HospitalAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('hospital.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('hospital')->attempt($credentials)) {
            return redirect()->intended('hospital/dashboard');
        }

        return redirect('hospital/login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('hospital')->logout();
        return redirect('hospital/login');
    }
}

