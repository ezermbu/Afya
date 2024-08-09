<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function create()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('doctor.schedule_appointment', compact('doctors', 'patients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'patient_id' => 'required|exists:patients,id',
            'scheduled_at' => 'required|date',
        ]);

        Appointment::create([
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
            'scheduled_at' => $request->scheduled_at,
        ]);

        return redirect('doctor/appointments');
    }

    public function index()
    {
        $doctorId = Auth::guard('doctor')->user()->id;
        $appointments = Appointment::where('doctor_id', $doctorId)->get();
        return view('doctor.appointments', compact('appointments'));
    }
}
