@extends ('layout.main')

@section('content')
    <div class = "container">
        <div class="row">

            <div class="text-success">You are welcome!</div>


            <div class="col-md-4 col-md-offset-4">

                {{ Form::open(array('url'=>'/todo','method'=>'post'))}}


                <div class="form-group">

                    {{ Form::label('todo_subject','To-Do Subject:') }}
                    {{ Form::text('subject',null,array('class'=>'form-control')) }}



                </div>


                <div class="form-group">

                    {{ Form::label('todo_description',' Description:') }}
                    {{ Form::textarea('description',null,array('class'=>'form-control')) }}



                </div>








                {{ Form::submit('Create',array('class'=>'btn btn-inverse') ) }}



            </div>

            {{ Form::close ()}}



        </div>
        <div>
            <nav class ="navbar-right"><p class ="text-info">powered by: Nelson@Johns&copy{{date('Y')}}</p></nav>
        </div>

    </div>
@stop