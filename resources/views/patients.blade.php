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
                <a href="#">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </a>
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
                                    <div>
                                        <a href="#" data-toggle="modal" data-target="#myModal{{$am->id}}"
                                           style="margin-left: 10px">
                                            <button class="btn btn-sm btn-outline-primary">
                                                Edit
                                            </button>
                                        </a>
                                    </div>
                                    <div>
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#861414" class="bi bi-trash" viewBox="0 0 16 16">--}}
{{--                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>--}}
{{--                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>--}}
{{--                                        </svg>--}}
                                        <form method="post" action=" {{ route('delete', $am->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger" style="margin-left: 10px">
                                               Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-dark btn-sm">View</button>
                            </td>
                        </tr>

{{--                            edit patient details modal--}}

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="modal fade" id="myModal{{$am->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>Edit Details</h3>
                                                </div>
                                                <form method="post" action="{{ route('edit', $am->id) }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="p_name">Name :</label>
                                                            <input type="text" class="form-control" name="p_name"
                                                                   value="{{ $am->p_name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="p_email">Email :</label>
                                                            <input type="email" class="form-control" name="p_email"
                                                                   value="{{ $am->p_email }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="p_number">Phone Number :</label>
                                                            <input type="text" class="form-control" name="p_number"
                                                                   value="{{ $am->p_number }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="p_residence">Residence :</label>
                                                            <input type="text" class="form-control" name="p_residence"
                                                                   value="{{ $am->p_residence }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="p_dob">Date of birth :</label>
                                                            <input type="date" class="form-control" name="p_dob"
                                                                   value="{{ $am->p_dob }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="p_insurance">Insurance Cover :</label>
{{--                                                            <input type="text" class="form-control" name="p_insurance"--}}
{{--                                                                   value="{{ $am->p_insurance }}">--}}
                                                            <select name="p_insurance" class="form-control" id="p_insurance">
                                                                <option value="{{ $am->p_insurance }}">{{ $am->p_insurance }}</option>
                                                                <option value="-">None</option>
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
                                                        <div class="form-group">
                                                            <label for="p_card_number">Card Number :</label>
                                                            <input type="text" class="form-control" name="p_card_number"
                                                                   value="{{ $am->p_card_number }}">
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>

                                                        <button type="submit" class="btn btn-primary btn-sm" style="margin-left: 10px">Update </button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        @endforeach
                        </tbody>
                        <tbody>
                    </table>
            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    </body>

    </html>





@endsection
