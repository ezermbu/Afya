<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;

class DoctorAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('doctor.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('doctor')->attempt($credentials)) {
            return redirect()->intended('doctor/dashboard');
        }

        return redirect('doctor/login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('doctor')->logout();
        return redirect('doctor/login');
    }
}
