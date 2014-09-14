@extends('layout.default')
@section('content')
<!-- <div class="register"> -->
    <h1 class="register">Register</h1>
    <h2 class="filename">register.blade.php</h2>

    <!-- {{ Form::open(["url" => "/users/create","class"=>"register-form"]) }}
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
    {{ Form::close() }} -->

    <div class="register-form-container container">
        <h2 class="register-label">Register</h2>

        {{ Form::open(array("url"=>url("/users/create"), "class"=>"register-form")) }}

            {{ Form::label('username','Username:') }}
            {{ Form::input('text','username',null,['placeholder'=>'Username']) }}
            {{ $errors->first('username') }}

            {{ Form::label('password','Password:') }}
            {{ Form::password('password',array('placeholder'=>'Create a password')) }}
            {{ $errors->first('password') }}

            {{ Form::submit('Create User',array("class"=>"register-btn")) }}
        {{ Form::close() }}
    </div>
<!-- </div> -->
@stop
