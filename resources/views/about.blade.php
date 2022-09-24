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
        <h1>About Dashboard</h1>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, debitis dignissimos doloribus, est ipsa laudantium molestias natus necessitatibus numquam porro quibusdam reiciendis rem tenetur. Ad, consectetur consequuntur dignissimos dolorum earum iure tempore unde vitae! At culpa, facere incidunt ipsum, iusto neque numquam quidem quis reprehenderit sed sequi sit, soluta. Ad commodi cumque, cupiditate ducimus ea, natus obcaecati, quia quisquam quod tempore ut veritatis voluptas! At esse molestias neque quaerat sit. Eos nihil perspiciatis porro. Assumenda eaque iure nesciunt obcaecati officia quasi quis quo! Ab architecto at blanditiis deserunt dicta dolorem, enim iste itaque iusto, magnam, officia quae quia repudiandae voluptate.
    </div>

    </body>

    </html>





@endsection
