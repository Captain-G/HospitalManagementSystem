@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <head>
        <style>
            /*button style*/
            .custom-btn {
                width: 130px;
                height: 40px;
                color: #212121;
                border-radius: 5px;
                padding: 10px 25px;
                font-family: 'Lato', sans-serif;
                font-weight: 500;
                background: transparent;
                cursor: pointer;
                transition: all 0.3s ease;
                position: relative;
                display: inline-block;
                box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
                7px 7px 20px 0px rgba(0,0,0,.1),
                4px 4px 5px 0px rgba(0,0,0,.1);
                outline: none;
            }

            /* 5 */
            .btn-5 {
                width: 130px;
                height: 40px;
                line-height: 42px;
                padding: 0;
                border: none;
                background: #212121;

            }
            .btn-5:hover {
                color: #fff;
                /*background: transparent;*/
                background: #212121;
                /*color: #212121;*/
                box-shadow:none;
            }

            .btn-5:before,
            .btn-5:after{
                content:'';
                position:absolute;
                top:0;
                right:0;
                height:2px;
                width:0;
                background: #fff;
                box-shadow:
                    -1px -1px 5px 0px #fff,
                    7px 7px 20px 0px #0003,
                    4px 4px 5px 0px #0002;
                transition:400ms ease all;
            }
            .btn-5:after{
                right:inherit;
                top:inherit;
                left:0;
                bottom:0;
            }

            .btn-5:hover:before,
            .btn-5:hover:after{
                width:100%;
                transition:800ms ease all;
            }
            /*search*/
            @import url(https://fonts.googleapis.com/css?family=Open+Sans);

            body {
                background: #f2f2f2;
                font-family: "Open Sans", sans-serif;
            }


        </style>

    </head>

    <body>
    <div class="container">
        <h1>Patients Dashboard</h1>
        <div style="margin-top: 20px; margin-bottom: 12px">
            <button class="custom-btn btn-5">
                <a href=" {{ route('addPatientBtn') }}" style="text-decoration: none; color: whitesmoke">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg>
                        <span> Add Patient</span>
                </a>
            </button>
        </div>
        <div>
            <h3 style="margin-bottom: 12px">Number of patients : 34</h3>
            <form class="form-inline my-2 my-lg-0" style="display: flex">
                <input class="form-control mr-sm-2" type="search" placeholder="Search for a patient in the database." aria-label="Search" style="width: 80%; margin-right: 12px">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
            <div style="margin-top: 20px">

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
                            <th scope="col">Action</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $am)
                        <tr>
                            <td>{{ $am->id }}</td>
                            <td>{{ $am->p_name }}</td>
                            <td>{{ $am->p_email }}</td>
                            <td>{{ $am->p_number }}</td>
                            <td>{{ $am->p_residence }}</td>
                            <td>{{ $am->p_dob }}</td>
                            <td>{{ $am->p_insurance }}</td>
                            <td>{{ $am->p_card_number }}</td>
                            <td>
                                <div style="display: flex">
                                    <div style="margin-right: 20px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#103b74" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#861414" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-dark btn-sm">View</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tbody>
                    </table>



            </div>


        </div>
    </div>

    </body>

    </html>





@endsection
