<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/patients', [App\Http\Controllers\HomeController::class, 'patients'])->name('patients');
Route::get('/doctors', [App\Http\Controllers\HomeController::class, 'doctors'])->name('doctors');
Route::get('/nurses', [App\Http\Controllers\HomeController::class, 'nurses'])->name('nurses');
Route::get('/appointment', [App\Http\Controllers\HomeController::class, 'appointment'])->name('appointment');
Route::get('/pharmacy', [App\Http\Controllers\HomeController::class, 'pharmacy'])->name('pharmacy');
Route::get('/insurance', [App\Http\Controllers\HomeController::class, 'insurance'])->name('insurance');
Route::get('/branches', [App\Http\Controllers\HomeController::class, 'branches'])->name('branches');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/addPatientBtn', [App\Http\Controllers\HomeController::class, 'addPatientBtn'])->name('addPatientBtn');
Route::post('/addPatient', [HomeController::class, 'addPatient'])->name('addPatient');
Route::get('/allPatients', [PatientsController::class, 'allPatients'])->name('allPatients');