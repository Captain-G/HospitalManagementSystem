<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use Illuminate\Http\Request;

class NursesController extends Controller
{
    public function addNurseBtn(){
        return view('addNurse');
    }
    public function addNurse(Request $request){
        $request->validate([
            'n_name' => 'required',
            'n_photo' => 'nullable',
            'n_number' => 'min:9|max:13',
            'n_email' => 'nullable',
            'n_dob' => 'nullable',
            'n_branch' => 'nullable',
        ]);

        $newNurse = new Nurse();
        $newNurse->n_name = $request->n_name;
        $newNurse->n_photo = $request->n_photo;
        $newNurse->n_email = $request->n_email;
        $newNurse->n_dob = $request->n_dob;
        $newNurse->n_branch = $request->n_branch;
        $newNurse->n_number = $request->n_number;

        $newNurse->save();

        $data = Nurse::all();
        return view('nurses', ['data' => $data]);
    }
}
