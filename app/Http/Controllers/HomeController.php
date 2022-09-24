<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function patients(){
        return view('patients');
    }
    public function doctors(){
        return view('doctors');
    }
    public function nurses(){
        return view('nurses');
    }
    public function appointment(){
        return view('appointment');
    }
    public function pharmacy(){
        return view('pharmacy');
    }
    public function insurance(){
        return view('insurance');
    }
    public function branches(){
        return view('branches');
    }
    public function about(){
        return view('about');
    }
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
}
