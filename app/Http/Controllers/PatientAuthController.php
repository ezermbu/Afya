<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

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
            'password' => $request->password,
        ]);

        Session::put('patient_id', $patient->id);

        return redirect()->route('patient.dashboard')->with('patient', $patient);
    }

    public function showLoginForm()
    {
        return view('patient.login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $patient = Patient::where('email', $credentials['email'])->first();

            if (!$patient || $credentials['password'] !== $patient->password) {
                throw ValidationException::withMessages([
                    'email' => ['Les informations d\'identification fournies sont incorrectes.'],
                ]);
            }

            $request->session()->put('patient_id', $patient->id);
            return redirect()->intended('patient/dashboard');
        } catch (ValidationException $e) {
            return redirect('patient/login')->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect('patient/login')->withErrors(['error' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
        }
    public function logout(Request $request)
    {
        try {
            $request->session()->forget('patient_id');
            return redirect('/');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de la déconnexion. Veuillez réessayer.']);
        }
    }
}
