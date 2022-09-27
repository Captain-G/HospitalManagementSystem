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
        <h1>Patients Search Dashboard</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Residence</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Insurance Cover</th>
                <th scope="col">Insurance Card Number</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->id }}</td>
                    <td>{{ $patient->p_name }}</td>
                    <td>{{ $patient->p_email }}</td>
                    <td>{{ $patient->p_number }}</td>
                    <td>{{ $patient->p_residence }}</td>
                    <td>{{ $patient->p_dob }}</td>
                    <td>{{ $patient->p_insurance }}</td>
                    <td>{{ $patient->p_card_number }}</td>
                </tr>
        @endforeach
    </div>

    </body>

    </html>





@endsection
