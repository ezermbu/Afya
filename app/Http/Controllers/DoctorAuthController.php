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
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $doctor = Doctor::where('email', $credentials['email'])->first();

            if (!$doctor || $credentials['password'] !== $doctor->password) {
                throw ValidationException::withMessages([
                    'email' => ['Les informations d\'identification fournies sont incorrectes.'],
                ]);
            }

            $request->session()->put('doctor_id', $doctor_id->id);
            return redirect()->intended('doctor/dashboard');
        } catch (ValidationException $e) {
            return redirect('doctor/login')->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect('doctor/login')->withErrors(['error' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::guard('doctor')->logout();
            return redirect('doctor/login');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de la déconnexion. Veuillez réessayer.']);
        }
    }
}
