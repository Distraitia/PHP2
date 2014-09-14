@extends('layout.default')
@section('content')
    <h1 class="welcome">Welcome.</h1>
    <h2 class="filename">hello.blade.php</h2>

    <div class="home-form-container">
        <h2 class="login-label is-active">Login</h2>
        <h2 class="register-label">Register</h2>

        {{ Form::open(['route' => 'sessions.store',"class"=>"login-form is-active"]) }}

            {{ Form::label('username','Username: ') }}
            {{ Form::text('username') }}

            {{ Form::label('password','Password: ') }}
            {{ Form::password('password') }}

            {{ Form::submit('Login',array("class"=>"login-btn")) }}

        {{ Form::close() }}

        {{ Form::open(array("url"=>url("/users/create"), "class"=>"register-form")) }}

            {{ Form::label('username','Username: ',array("class"=>"label")) }}
            {{ Form::input('text','username','Bubba Hotep',['class'=>'label']) }}
            {{ $errors->first('username') }}

            {{ Form::label('password','Password: ') }}
            {{ Form::password('password',array('class'=>'label','placeholder'=>'Somebody stop me!')) }}
            {{ $errors->first('password') }}

            {{ Form::submit('Create User') }}
        {{ Form::close() }}
    </div>

    <div class="options-menu">
        <h2>What would you like to do?</h2>
        <ul class="options">
        	<li>   
                {{ link_to("/users", "View Users",array("class"=>"users-btn block-btn")) }}
            </li>
        	<li>
                {{ link_to("/users/register", "Register New User",array("class"=>"register-btn block-btn")) }}
            </li>
            <li>
                {{ link_to("comments", "View Comments",array("class"=>"block-btn view-comments-btn")) }}
            </li>
        </ul>
    </div>
@stop
