<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeleconsultationController extends Controller
{
    public function index()
    {
        return view('teleconsultation');
    }

    public function leave()
    {
        // Logique pour quitter la consultation, si nécessaire
        return redirect('lobby');
    }
}
