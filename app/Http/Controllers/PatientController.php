<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\Report;

class PatientController extends Controller
{
    public function dashboard()
    {
        // Vérifier si l'utilisateur est connecté et si l'ID correspond
        if (!session()->has('patient_id')) {
            return redirect()->route('patient.login')->with('error', 'Veuillez vous connecter pour accéder à votre tableau de bord.');
        }

        // Récupérer tous les rapports où patient_id est égal à l'id de la session
        $reports = Report::where('patient_id', session('patient_id'))->get();
        $patient = Patient::find(session('patient_id'));

        // Passer les rapports à la vue
        return view('patient.dashboard', compact('patient', 'reports'));
    }


    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients);
    }

    public function indexAdmin() 
    {
        if (!session()->has('admin_id')) {
            return redirect()->intended(route('admin.login'))->with('error', 'Veuillez vous connecter en tant qu\'administrateur.');       
        }

        
        $patients = Patient::all();
        $admin = Admin::find(session('admin_id'));
        
        return view('admin.patients', compact('patients', 'admin'));        
    }

    /**
     * Store a newly created patient in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:patients',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $patient = Patient::create($request->all());

        return response()->json($patient, 201);
    }

    /**
     * Display the specified patient.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        $admin = Admin::find(session('admin_id'));
        return view('admin.show_patient', compact('patient', 'admin'));
    }

    /**
     * Update the specified patient in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:patients,email,' . $id,
            'phone' => 'string|max:20',
            'address' => 'string|max:255',
            'date_of_birth' => 'date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $patient->update($request->all());

        return response()->json($patient);
    }

    /**
     * Remove the specified patient from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();

        return response()->json(null, 204);
    }
}
