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
        <h1>Add Nurse Page</h1>
        <form action="{{ route('addNurse') }}" method="post">
            @csrf
            {{--            nurse's image--}}
            <div class="row mb-3">
                <label for="n_photo" class="col-md-4 col-form-label text-md-end">Passport Photo</label>
                <div class="col-md-6">
                    <input id="n_photo" type="file" class="form-control-file" name="n_photo">
                </div>

            </div>
            {{--        nurse's name--}}
            <div class="row mb-3">
                <label for="n_name" class="col-md-4 col-form-label text-md-end">{{ __("Nurse's Name") }}</label>
                <div class="col-md-6">
                    <input id="n_name" name="n_name" class="form-control  value="{{ old('n_name') }}" required autocomplete="n_name" autofocus>
                </div>
            </div>
            {{--nurse's email address--}}
            <div class="row mb-3">
                <label for="n_email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                <div class="col-md-6">
                    <input id="n_email" name="n_email" class="form-control value="{{ old('n_email') }}" required autocomplete="n_email">
                </div>
            </div>
            {{--        nurse's phone number--}}
            <div class="row mb-3">
                <label for="n_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                <div class="col-md-6">
                    <input id="n_number" name="n_number" class="form-control value="{{ old('n_number') }}" placeholder="+254" required autocomplete="n_number">
                </div>
            </div>

            {{--        nurse's date of birth--}}
            <div class="row mb-3">
                <label for="n_dob" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>
                <div class="col-md-6">
                    <input type="date" id="n_dob" name="n_dob" class="form-control value="{{ old('n_dob') }}">
                </div>
            </div>

            {{--            nurse's branch--}}
            <div class="row mb-3">
                <label for="n_branch" class="col-md-4 col-form-label text-md-end">{{ __('Branch') }}</label>
                <div class="col-md-6">
                    <select name="n_branch" class="form-control" id="n_branch" >
                        <option value="" disabled selected hidden>Click to select the nurse's branch</option>
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
                        {{ __('Add Nurse') }}
                    </button>
                </div>
            </div>
        </form>

    </div>

    </body>

    </html>





@endsection
