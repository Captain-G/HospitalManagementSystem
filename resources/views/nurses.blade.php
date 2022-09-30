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
        </style>


    </head>

    <body>
    <div class="container">
        <h1>Nurses Dashboard</h1>
        <div style="margin-top: 20px; margin-bottom: 12px">
            <button class="custom-btn btn-5">
                <a href="{{ route('addNurseBtn') }}" style="text-decoration: none; color: whitesmoke">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5h2.025zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5zM1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                    </svg>
                    <span> Add Nurse</span>
                </a>
            </button>
        </div>

   </div>

    </body>

    </html>





@endsection
