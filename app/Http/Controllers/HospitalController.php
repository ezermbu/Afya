<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

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
        ]);

        Hospital::create($request->all());

        return redirect('admin/hospitals');
    }

    public function index()
    {
        $hospitals = Hospital::all();
        return view('admin.hospitals', compact('hospitals'));
    }
}
