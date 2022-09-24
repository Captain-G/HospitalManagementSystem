<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function allPatients(){
        $data = Patient::all();

        return view('patients', ['data' => $data]);
    }
}
