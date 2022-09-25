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

}
