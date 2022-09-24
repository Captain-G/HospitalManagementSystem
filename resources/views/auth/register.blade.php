@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
{{--                        ***** enctype="multipart/form-data"--}}
                        @csrf
{{--                        PASSPORT PHOTO--}}
                        <div class="row mb-3">
                            <label for="passportPhoto" class="col-md-4 col-form-label text-md-end">Passport Photo</label>
                            <div class="col-md-6">
                                <input id="passportPhoto" type="file" class="form-control-file" name="passportPhoto">
                            </div>

                        </div>

{{--                        NAME--}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
{{--                        EMAIL ADDRESS--}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
{{--                        NATIONALITY--}}

                        <div class="row mb-3">
                            <label for="nationality" class="col-md-4 col-form-label text-md-end">{{ __('Nationality') }}</label>
                            <div class="col-md-6">
{{--                                <input id="nationality" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}
                                <select name="nationality" class="form-control" id="nationality">
                                    <option value="Kenyan">Kenyan</option>
                                    <option value="British">British</option>
                                    <option value="American">American</option>
                                    <option value="Other">Other</option>

                                </select>
                            </div>
                        </div>


{{--                        PHONE NUMBER--}}
                        <div class="row mb-3">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" placeholder="+254" required autocomplete="phoneNumber" autofocus>

                                @error('phoneNumber')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
{{--                        POSITION--}}
                        <div class="row mb-3">
                            <label for="position" class="col-md-4 col-form-label text-md-end">{{ __('Position') }}</label>
                            <div class="col-md-6">
                                {{--                                <input id="nationality" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}
                                <select name="position" class="form-control" id="position">
                                    <option value="Doctor">Doctor</option>
                                    <option value="Nurse">Nurse</option>
                                    <option value="Pharmacist">Pharmacist</option>
                                    <option value="Support Staff">Support Staff</option>
                                    <option value="Other">Other</option>

                                </select>
                            </div>
                        </div>
{{--                        PASSWORD--}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
{{--                        CONFIRM PASSWORD--}}
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
