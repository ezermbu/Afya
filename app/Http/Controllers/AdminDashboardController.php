<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $hospitalCount = Hospital::count();
        $doctorCount = Doctor::count();
        $patientCount = Patient::count();
        $todayAppointments = Appointment::whereDate('scheduled_at', today())->count();

        return view('admin.dashboard', compact('hospitalCount', 'doctorCount', 'patientCount', 'todayAppointments'));
    }
}
