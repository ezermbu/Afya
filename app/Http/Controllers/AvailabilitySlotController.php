<?php

namespace App\Http\Controllers;

use App\Models\AvailabilitySlot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvailabilitySlotController extends Controller
{
    public function create()
    {
        return view('doctor.create_availability_slot');
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        AvailabilitySlot::create([
            'doctor_id' => Auth::guard('doctor')->user()->id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect('doctor/availability-slots');
    }

    public function index()
    {
        $doctorId = Auth::guard('doctor')->user()->id;
        $slots = AvailabilitySlot::where('doctor_id', $doctorId)->get();
        return view('doctor.availability_slots', compact('slots'));
    }
}
