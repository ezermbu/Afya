<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class HospitalAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('hospital.login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $hospital = Hospital::where('email', $credentials['email'])->first();

            if (!$hospital || $credentials['password'] !== $hospital->password) {
                throw ValidationException::withMessages([
                    'email' => ['Les informations d\'identification fournies sont incorrectes.'],
                ]);
            }

            $request->session()->put('hospital_id', $hospital->id);
            return redirect()->intended('hospital/dashboard');
        } catch (ValidationException $e) {
            return redirect('hospital/login')->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect('hospital/login')->withErrors(['error' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->session()->forget('hospital_id');
            return redirect('hospital/login');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de la déconnexion. Veuillez réessayer.']);
        }
    }
}
