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
        <h1>Add patient page</h1>
        <form action=" {{ route('addPatient') }}" method="post">
            @csrf
{{--        patient's name--}}
        <div class="row mb-3">
            <label for="p_name" class="col-md-4 col-form-label text-md-end">{{ __("Patient's Name") }}</label>
            <div class="col-md-6">
                <input id="p_name" name="p_name" class="form-control  value="{{ old('p_name') }}" required autocomplete="p_name" autofocus>
            </div>
        </div>
{{--patient's email address--}}
        <div class="row mb-3">
            <label for="p_email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
            <div class="col-md-6">
                <input id="p_email" name="p_email" class="form-control value="{{ old('p_email') }}" required autocomplete="p_email">
            </div>
        </div>
{{--        patient's phone number--}}
        <div class="row mb-3">
            <label for="p_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
            <div class="col-md-6">
                <input id="p_number" name="p_number" class="form-control value="{{ old('p_number') }}" placeholder="+254" required autocomplete="p_number">
            </div>
        </div>
{{--        patient's area of residence--}}
        <div class="row mb-3">
            <label for="p_residence" class="col-md-4 col-form-label text-md-end">{{ __('Area of Residence') }}</label>
            <div class="col-md-6">
                <input id="p_residence" name="p_residence" class="form-control value="{{ old('p_residence') }}">
            </div>
        </div>
{{--        patient's date of birth--}}
        <div class="row mb-3">
            <label for="p_dob" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>
            <div class="col-md-6">
                <input type="date" id="p_dob" name="p_dob" class="form-control value="{{ old('p_dob') }}">
            </div>
        </div>
{{--        insurance cover--}}
        <div class="row mb-3">
            <label for="p_insurance" class="col-md-4 col-form-label text-md-end">{{ __('Insurance Cover') }}</label>
            <div class="col-md-6">
                <select name="p_insurance" class="form-control" id="p_insurance" >
                    <option value="" disabled selected hidden>Click to select your insurance company</option>
                    <option value="First Assurance Company Limited">First Assurance Company Limited</option>
                    <option value="G.A. Insurance Ltd">G.A. Insurance Ltd</option>
                    <option value="AAR Insurance Africa">AAR Insurance Africa</option>
                    <option value="Heritage Insurance Company">Heritage Insurance Company</option>
                    <option value="Allianz Insurance Company Ltd">Allianz Insurance Company Ltd</option>
                    <option value="APA insurance">APA insurance</option>
                    <option value="Britam">Britam</option>
                    <option value="CIC Group">CIC Group</option>
                    <option value="Kenindia Assurance Company Limited">Kenindia Assurance Company Limited</option>
                    <option value="Kenyan Alliance Insurance Company Ltd">Kenyan Alliance Insurance Company Ltd</option>
                    <option value="Madison Insurance">Madison Insurance</option>
                    <option value="Jubilee Insurance">Jubilee Insurance</option>

                </select>

            </div>
        </div>
{{--        insurance card number--}}
        <div class="row mb-3">
            <label for="p_card_number" class="col-md-4 col-form-label text-md-end">{{ __('Insurance Card Number') }}</label>
            <div class="col-md-6">
                <input id="p_card_number" name="p_card_number" class="form-control value="{{ old('p_card_number') }}">
            </div>
        </div>
{{--        button--}}
        <div class="row mb-0" style="justify-content: right">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Add Patient') }}
                </button>
            </div>
        </div>
        </form>
    </div>

    </body>

    </html>





@endsection
