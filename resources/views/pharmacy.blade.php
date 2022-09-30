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
        <h1>Pharmacy Dashboard</h1>
        <div style="margin-top: 20px; margin-bottom: 12px">
            <button class="custom-btn btn-5">
                <a href="" style="text-decoration: none; color: whitesmoke">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-medical" viewBox="0 0 16 16">
                        <path d="M8.5 4.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L7 6l-.549.317a.5.5 0 1 0 .5.866l.549-.317V7.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L9 6l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V4.5zM5.5 9a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                    </svg>
                    <span> Add to Inventory</span>
                </a>
            </button>
        </div>
        <div style="margin-top: 20px; margin-bottom: 12px">
            <button class="custom-btn btn-5">
                <a href="" style="text-decoration: none; color: whitesmoke">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                    </svg>
                    <span> Point of Sale</span>
                </a>
            </button>
        </div>

   </div>

    </body>

    </html>





@endsection
