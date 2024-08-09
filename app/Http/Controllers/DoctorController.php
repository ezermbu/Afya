<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function create()
    {
        return view('hospital.add_doctor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctors',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $hospitalId = Auth::guard('hospital')->user()->id;

        Doctor::create([
            'hospital_id' => $hospitalId,
            'name' => $request->name,
            'specialty' => $request->specialty,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('hospital/doctors');
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('hospital.edit_doctor', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $doctor = Doctor::findOrFail($id);
        $doctor->name = $request->name;
        $doctor->specialty = $request->specialty;
        $doctor->email = $request->email;
        if ($request->password) {
            $doctor->password = bcrypt($request->password);
        }
        $doctor->save();

        return redirect('hospital/doctors');
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect('hospital/doctors');
    }

    public function index()
    {
        $hospitalId = Auth::guard('hospital')->user()->id;
        $doctors = Doctor::where('hospital_id', $hospitalId)->get();
        return view('hospital.doctors', compact('doctors'));
    }
}

