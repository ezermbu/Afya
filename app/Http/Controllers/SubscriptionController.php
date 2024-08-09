<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function showSubscriptionForm()
    {
        $hospitals = Hospital::all();
        return view('patient.subscribe', compact('hospitals'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'hospital_id' => 'required|exists:hospitals,id',
        ]);

        $patient = Auth::user();
        $patient->hospitals()->attach($request->hospital_id);

        return redirect('patient/dashboard')->with('success', 'Successfully subscribed to the hospital');
    }
}
