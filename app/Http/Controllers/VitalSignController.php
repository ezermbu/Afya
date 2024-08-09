<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VitalSign;
use Illuminate\Support\Facades\Auth;

class VitalSignController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'heart_rate' => 'required|integer',
            'blood_pressure' => 'required|string',
            'temperature' => 'required|numeric',
        ]);

        VitalSign::create([
            'patient_id' => Auth::id(),
            'heart_rate' => $request->heart_rate,
            'blood_pressure' => $request->blood_pressure,
            'temperature' => $request->temperature,
        ]);

        return response()->json(['message' => 'Vital signs recorded successfully.']);
    }
}
