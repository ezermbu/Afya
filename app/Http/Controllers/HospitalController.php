<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Admin;
use Illuminate\Http\Request;
use APp\Models\Hospital_patient;

class HospitalController extends Controller
{
    public function create()
    {
        return view('admin.add_hospital');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'email' => 'required|email|max:255'
        ]);

        Hospital::create($request->all());

        return redirect()->intended('admin/hospitals');
    }

    public function index()
    {
        if (!session()->has('admin_id')) {
            return redirect()->intended(route('admin.login'))->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        $admin = Admin::find(session('admin_id'));
        $hospitals = Hospital::all();

        $hospitalCount = $hospitals->count();
        $doctorCount = Doctor::count();
        $patientCount = Patient::count();
        $todayAppointments = Appointment::whereDate('scheduled_at', today())->count();

        return view('admin.hospitals', compact('admin', 'hospitals', 'hospitalCount', 'doctorCount', 'patientCount', 'todayAppointments'));
    }

    public function dashboard()
    {
        if (!session()->has('hospital_id')) {
            return redirect()->intended(route('hospital.login'))->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');
        }

        $hospital = Hospital::find(session('hospital_id'));
        $hospitalCount = Hospital::count();
        $doctorCount = Doctor::count();
        $patientCount = Hospital_patient::where('hospital_id', $hospital->id)->count();
        //$todayAppointments = Appointment::whereDate('scheduled_at', today())->where('hospital_id', $hospital->id)->count();

        $patients = Patient::where('hospital_id', $hospital->id)->get();
        //$consultations = Appointment::where('hospital_id', $hospital->id)->get();
        /*$prescriptions = Prescription::whereHas('appointment', function($query) use ($hospital) {
            $query->where('hospital_id', $hospital->id);
        })->get();*/

        return view('hospital.dashboard', compact('hospital', 'hospitalCount', 'doctorCount', 'patientCount', 'todayAppointments', 'patients', 'consultations', 'prescriptions'));
    }


    public function destroy($id)
    {
        $hospital = Hospital::findOrFail($id);
        $hospital->delete();

        return redirect()->route('admin.hospitals')->with('success', 'Hôpital supprimé avec succès');
    }

    public function edit($id)
    {
        $hospital = Hospital::findOrFail($id);
        $admin = Admin::find(session('admin_id'));
        return view('admin.edit_hospital', compact('hospital', 'admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'email' => 'required|email|max:255'
        ]);

        $hospital = Hospital::findOrFail($id);
        $hospital->update($request->all());

        return redirect()->route('admin.hospitals')->with('success', 'Hôpital mis à jour avec succès');
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
