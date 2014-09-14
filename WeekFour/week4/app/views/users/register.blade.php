@extends('layout.default')
@section('content')
<!-- <div class="register"> -->
    <h1 class="register">Register</h1>
    <h2 class="filename">register.blade.php</h2>

    {{ Form::open(["url" => "/users/create","class"=>"register-form"]) }}
    <div>
        {{ Form::label('username','Username: ') }}
        {{ Form::text('username') }}
        {{ $errors->first('username') }}
    </div>
    <div>
        {{ Form::label('password','Password: ') }}
        {{ Form::password('password') }}
        {{ $errors->first('password') }}
    </div>

    <div>
        {{ Form::submit('Create User') }}
    </div>
    {{ Form::close() }}
<!-- </div> -->
@stop
