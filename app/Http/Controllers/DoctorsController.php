<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function addDoctorBtn(){
        return view('addDoctor');
    }
    public function addDoctor(Request $request){
        $request->validate([
            'd_name' => 'required',
            'd_photo' => 'nullable',
            'd_number' => 'min:9|max:13',
            'd_email' => 'nullable',
            'd_dob' => 'nullable',
            'd_ethnicity' => 'nullable',
            'd_speciality' => 'nullable',
            'd_branch' => 'nullable',
        ]);

        $newDoctor = new Doctor();
        $newDoctor->d_name = $request->d_name;
        $newDoctor->d_photo = $request->d_photo;
        $newDoctor->d_email = $request->d_email;
        $newDoctor->d_number = $request->d_number;
        $newDoctor->d_dob = $request->d_dob;
        $newDoctor->d_speciality = $request->d_speciality;
        $newDoctor->d_branch = $request->d_branch;
        $newDoctor->d_ethnicity = $request->d_ethnicity;

        $newDoctor->save();
        $data = Doctor::all();
        return view('doctors', ['data' => $data]);
    }
}
