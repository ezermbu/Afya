<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PatientAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('patient.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:patients',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $patient = Patient::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($patient);

        return redirect('patient/dashboard');
    }

    public function showLoginForm()
    {
        return view('patient.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('patient/dashboard');
        }

        return redirect('patient/login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
