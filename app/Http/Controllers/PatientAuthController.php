<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

        Session::put('patient_id', $patient->id);

        return redirect('patient/dashboard');
    }

    public function showLoginForm()
    {
        return view('patient.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $patient = Patient::where('email', $credentials['email'])->first();

        if ($patient && $credentials['password'] === $patient->password) {            Session::put('patient_id', $patient->id);
            return redirect()->intended('patient/dashboard');
        }

        $request->session()->put('patient_id', $patient->id);
        return redirect('patient/login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        try {
            $request->session()->forget('patient_id');
            return redirect('/');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de la déconnexion. Veuillez réessayer.']);
        }
    }
}
