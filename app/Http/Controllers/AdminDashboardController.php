<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Admin;

class AdminDashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('admin_id')) {
            return redirect()->intended(route('admin.login'))->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');       
        }

        $admin = Admin::find(session('admin_id'));
        $hospitalCount = Hospital::count();
        $doctorCount = Doctor::count();
        $patientCount = Patient::count();
        $appointmentCount = Appointment::count();

        return view('admin.dashboard', compact('admin', 'hospitalCount', 'doctorCount', 'patientCount', 'appointmentCount'));
    }

    public function getPatientsAndDoctors()
    {
        if (!session()->has('admin_id')) {
            return redirect()->intended(route('admin.login'))->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        $patients = Patient::all();
        $doctors = Doctor::all();

        return view('admin.patients_and_doctors', compact('patients', 'doctors'));
    }

    public function settings()
    {
        if (!session()->has('admin_id')) {
            return redirect()->intended(route('admin.login'))->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        $admin = Admin::find(session('admin_id'));
        return view('admin.settings', compact('admin'));
    }

    public function updateSettings(Request $request)
    {
        if (!session()->has('admin_id')) {
            return redirect()->intended(route('admin.login'))->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        $admin = Admin::find(session('admin_id'));
        
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'profile_photo' => 'nullable|image|max:2048',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update admin settings
        $admin->name = $validatedData['name'];
        $admin->email = $validatedData['email'];

        if (!empty($validatedData['password'])) {
            $admin->password = $validatedData['password'];
        }

        $admin->save();

        return redirect()->back()->with('success', 'Paramètres mis à jour avec succès.');
    }
}
