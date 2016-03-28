
<html>
<head>
    <title> Library </title>
    <meta name ="viewport" content ="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset( 'css/bootstrap.min.css'  ) }}" type="text/css">

    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body>
<div class = "well">
<div class="page">
    <br> <br>
    <div class="col-md-4 col-md-offset-4 container" align="center">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class','-info') }} "> {{ Session::get('message') }} </p>
        @endif

    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">

            @if (Auth::check())
            @yield('books')

                    <!--        displays the records in books table-->



            <li> <a href="/logout"> LOg Out</a> </li>
            @else
                <li> {{ link_to_route('login', 'Log In')}}</li>
                <li> {{ link_to_route('register', 'Sign Up')}}</li>
            @endif
        </ul>
    </div>
    @yield('content')

</div>
</div>
</body>

</html>
