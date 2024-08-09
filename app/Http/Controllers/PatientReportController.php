<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientReportController extends Controller
{
    public function index()
    {
        $hospitalId = Auth::guard('hospital')->user()->id;
        $doctors = Doctor::where('hospital_id', $hospitalId)->get();
        $reports = Report::whereIn('doctor_id', $doctors->pluck('id'))->get();
        return view('hospital.patient_reports', compact('reports'));
    }
}
