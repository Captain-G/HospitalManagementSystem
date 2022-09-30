@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <head>

    </head>

    <body>
    <div class="container">
        <h1>Appointment Dashboard</h1>
        <form action="#" method="post">
            @csrf
            {{--        appointment speciality--}}
            <div class="row mb-3">
                <label for="a_speciality" class="col-md-4 col-form-label text-md-end">{{ __('Doctor Speciality') }}</label>
                <div class="col-md-6">
                    <select name="a_speciality" class="form-control" id="a_speciality" >
                        <option value="" disabled selected hidden>Click to select the doctor's speciality</option>
                        <option value="General Doctor">General Doctor</option>
                        <option value="Psychiatrist">Psychiatrist</option>
                        <option value="Gynecologist">Gynecologist</option>
                        <option value="Neurologist">Neurologist</option>
                        <option value="Dentist">Dentist</option>
                        <option value="Radiologist">Radiologist</option>
                        <option value="Paedetrician">Paedetrician</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Dermatologist">Dermatologist</option>
                    </select>

                </div>
            </div>

            {{--            appointment branch--}}
            <div class="row mb-3">
                <label for="a_branch" class="col-md-4 col-form-label text-md-end">{{ __('Branch') }}</label>
                <div class="col-md-6">
                    <select name="a_branch" class="form-control" id="a_branch" >
                        <option value="" disabled selected hidden>Click to select the doctor's branch</option>
                        <option value="Nairobi">Nairobi</option>
                        <option value="Nyeri">Nyeri</option>
                        <option value="Nakuru">Nakuru</option>
                        <option value="Mombasa">Mombasa</option>

                    </select>

                </div>
            </div>
            {{--        doctor's date of birth--}}
            <div class="row mb-3">
                <label for="a_date" class="col-md-4 col-form-label text-md-end">{{ __('Appointment Branch') }}</label>
                <div class="col-md-6">
                    <input type="date" id="a_date" name="a_date" class="form-control value="{{ old('a_date') }}">
                </div>
            </div>
            {{--        button--}}
            <div class="row mb-0" style="justify-content: right">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Add Appointment') }}
                    </button>
                </div>
            </div>
        </form>

    </div>

    </body>

    </html>





@endsection
