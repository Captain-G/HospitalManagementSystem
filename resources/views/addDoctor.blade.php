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
        <h1>Add Doctor Page</h1>
        <form action="{{ route('addDoctor') }} " method="post">
            @csrf
{{--            doctor's image--}}
            <div class="row mb-3">
                <label for="d_photo" class="col-md-4 col-form-label text-md-end">Passport Photo</label>
                <div class="col-md-6">
                    <input id="d_photo" type="file" class="form-control-file" name="d_photo">
                </div>

            </div>
            {{--        doctor's name--}}
            <div class="row mb-3">
                <label for="d_name" class="col-md-4 col-form-label text-md-end">{{ __("Doctor's Name") }}</label>
                <div class="col-md-6">
                    <input id="d_name" name="d_name" class="form-control  value="{{ old('d_name') }}" required autocomplete="d_name" autofocus>
                </div>
            </div>
            {{--docot's email address--}}
            <div class="row mb-3">
                <label for="d_email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                <div class="col-md-6">
                    <input id="d_email" name="d_email" class="form-control value="{{ old('d_email') }}" required autocomplete="d_email">
                </div>
            </div>
            {{--        doctor's phone number--}}
            <div class="row mb-3">
                <label for="d_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                <div class="col-md-6">
                    <input id="d_number" name="d_number" class="form-control value="{{ old('d_number') }}" placeholder="+254" required autocomplete="d_number">
                </div>
            </div>

            {{--        doctor's date of birth--}}
            <div class="row mb-3">
                <label for="d_dob" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>
                <div class="col-md-6">
                    <input type="date" id="d_dob" name="d_dob" class="form-control value="{{ old('d_dob') }}">
                </div>
            </div>
            {{--        doctor's speciality--}}
            <div class="row mb-3">
                <label for="d_speciality" class="col-md-4 col-form-label text-md-end">{{ __('Doctor Speciality') }}</label>
                <div class="col-md-6">
                    <select name="d_speciality" class="form-control" id="d_speciality" >
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
            {{--        doctor's ethnicity--}}
            <div class="row mb-3">
                <label for="d_ethnicity" class="col-md-4 col-form-label text-md-end">{{ __('Ethnicity') }}</label>
                <div class="col-md-6">
                    <select name="d_ethnicity" class="form-control" id="d_ethnicity" >
                        <option value="" disabled selected hidden>Click to select the doctor's ethnicity</option>
                        <option value="American Indian or Alaska Native">American Indian or Alaska Native</option>
                        <option value="Asian">Asian</option>
                        <option value="Black or African American">Black or African American</option>
                        <option value="Hispanic or Latino">Hispanic or Latino</option>
                        <option value="Native Hawaiian or Other Pacific Islander">Native Hawaiian or Other Pacific Islander</option>
                        <option value="White">White</option>
                    </select>

                </div>
            </div>
{{--            doctor's branch--}}
            <div class="row mb-3">
                <label for="d_branch" class="col-md-4 col-form-label text-md-end">{{ __('Branch') }}</label>
                <div class="col-md-6">
                    <select name="d_branch" class="form-control" id="d_branch" >
                        <option value="" disabled selected hidden>Click to select the doctor's branch</option>
                        <option value="Nairobi">Nairobi</option>
                        <option value="Nyeri">Nyeri</option>
                        <option value="Nakuru">Nakuru</option>
                        <option value="Mombasa">Mombasa</option>

                    </select>

                </div>
            </div>
            {{--        button--}}
            <div class="row mb-0" style="justify-content: right">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Add Doctor') }}
                    </button>
                </div>
            </div>
        </form>

   </div>

    </body>

    </html>





@endsection
