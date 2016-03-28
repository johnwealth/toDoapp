@extends ('layout.main')

@section('content')
    <div class = "container">
    <div class="row">


        <div class="col-md-4 col-md-offset-4">

            {{ Form::open(array('url'=>'/register','method'=>'post'))}}

            <div class="form-group">

                {{ Form::label('username','Username/Email') }}
                {{ Form::text('username',null,array('class'=>'form-control')) }}

                @if ($errors->has('username'))

                    {{ $errors->first('username') }}

                @endif


            </div>


            <div class="form-group">

                {{ Form::label('profile','Profile name') }}
                {{ Form::text('profile',null,array('class'=>'form-control')) }}

                @if ($errors->has('profile'))

                    {{ $errors->first('profile') }}

                @endif


            </div>

            <div class="form-group">
                {{ Form::label('password','Password') }}

                {{ Form::password('password',array('class'=>'form-control')) }}

                @if ($errors->has('password'))

                    {{ $errors->first('password') }}

                @endif

            </div>


            <div class="form-group">
                {{ Form::label('password_confirmation','Password') }}

                {{ Form::password('password_confirmation',array('class'=>'form-control')) }}

                @if ($errors->has('password_confirmation'))

                    {{ $errors->first('password_confirmation') }}

                @endif

            </div>

            {{ Form::submit('Register',array('class'=>'btn btn-primary') ) }}

            <p>Already have an account<a href="login"> Login here</a></p>

        </div>

        {{ Form::close ()}}



    </div>
    <div>
        <nav class ="navbar-right"><p class ="text-info">powered by: Nelson@Johns&copy{{date('Y')}}</p></nav>
    </div>

    </div>
@stop