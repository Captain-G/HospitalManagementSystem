<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function addPatientBtn(){
        return view('addPatient');
    }

    public function addPatient(Request $request){
        $request->validate([
            'p_name' => 'required',
            'p_email' => 'max:50|nullable',
            'p_number' => 'min:9|max:13',
            'p_residence' => 'nullable',
            'p_dob' => 'nullable',
            'p_insurance' => 'nullable',
            'p_card_number' => 'nullable',
        ]);
        $newPatient = new Patient();
        $newPatient->p_name = $request->p_name;
        $newPatient->p_email = $request->p_email;
        $newPatient->p_dob = $request->p_dob;
        $newPatient->p_residence = $request->p_residence;
        $newPatient->p_insurance = $request->p_insurance;
        $newPatient->p_card_number = $request->p_card_number;
        $newPatient->p_number = $request->p_number;

        $newPatient->save();
        $data = Patient::all();
        return view('patients', ['data' => $data]);
    }

    public function allPatients(){
        $data = Patient::all();

        return view('patients', ['data' => $data]);
    }

    public function edit(Request $request, $id){
        $newPatient = Patient::find($id);
        $newPatient->p_name = $request->input('p_name');
        $newPatient->p_email = $request->input('p_email');
        $newPatient->p_number = $request->input('p_number');
        $newPatient->p_residence = $request->input('p_residence');
        $newPatient->p_dob = $request->input('p_dob');
        $newPatient->p_insurance = $request->input('p_insurance');
        $newPatient->p_card_number = $request->input('p_card_number');
        $newPatient->update();

        $data = Patient::all();
        return view('patients', ['data' => $data]);
    }

    public function delete($id){
        $del = Patient::find($id);
        $del->delete();

        $data = Patient::all();
        return view('patients', ['data' => $data]);
    }

}
