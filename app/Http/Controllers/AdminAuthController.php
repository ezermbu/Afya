<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $admin = Admin::where('email', $credentials['email'])->first();

            if (!$admin || $credentials['password'] !== $admin->password) {
                throw ValidationException::withMessages([
                    'email' => ['Les informations d\'identification fournies sont incorrectes.'],
                ]);
            }

            $request->session()->put('admin_id', $admin->id);
            return redirect()->intended('admin/dashboard');
        } catch (ValidationException $e) {
            return redirect('admin/login')->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect('admin/login')->withErrors(['error' => 'Une erreur s\'est produite. Veuillez réessayer.']);
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->session()->forget('admin_id');
            return redirect('admin/login');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de la déconnexion. Veuillez réessayer.']);
        }
    }
}
