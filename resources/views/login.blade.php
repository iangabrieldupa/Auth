
@extends('base')

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-4 mt-4">
        {!! Form::open(['url'=>'/login','method'=>'post']) !!}

        <div class="mb-3">
            {!! Form::label("email", "Email") !!}
            {!! Form::email("email", null, ['class'=>'form-control']) !!}
        </div>
        <div class="mb-3">
            {!! Form::label("password", "Password") !!}
            {!! Form::password("password", ['class'=>'form-control']) !!}
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">
                LOGIN
            </button>
        </div>

        {!! Form::close() !!}
    </div>
</div>

@endsection