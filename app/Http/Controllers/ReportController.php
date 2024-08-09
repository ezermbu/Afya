<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Report;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function create()
    {
        $doctorId = Auth::guard('doctor')->user()->id;
        $appointments = Appointment::where('doctor_id', $doctorId)->get();
        return view('doctor.create_report', compact('appointments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'appointment_id' => 'required|exists:appointments,id',
            'report' => 'required|string',
        ]);

        $appointment = Appointment::find($request->appointment_id);

        Report::create([
            'doctor_id' => Auth::guard('doctor')->user()->id,
            'patient_id' => $appointment->patient_id,
            'report' => $request->report,
        ]);

        return redirect('doctor/reports');
    }

    public function index()
    {
        $hospitalId = Auth::guard('hospital')->user()->id;
        $doctors = Doctor::where('hospital_id', $hospitalId)->get();
        $reports = Report::whereIn('doctor_id', $doctors->pluck('id'))->get();
        return view('hospital.reports', compact('reports'));
    }
}
