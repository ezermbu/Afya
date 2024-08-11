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
            return redirect()->intended(route('admin.login'))->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');        }

        $admin = Admin::find(session('admin_id'));
        $hospitalCount = Hospital::count();
        $doctorCount = Doctor::count();
        $patientCount = Patient::count();
        $todayAppointments = Appointment::whereDate('scheduled_at', today())->count();

        return view('admin.dashboard', compact('admin', 'hospitalCount', 'doctorCount', 'patientCount', 'todayAppointments'));
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

}
