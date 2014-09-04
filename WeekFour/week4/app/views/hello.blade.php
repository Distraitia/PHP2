@extends('layout.default')
@section('content')
<!-- <div class="welcome"> -->
    <h1 class="welcome">Welcome.</h1>
    <h2 class="filename">hello.blade.php</h2>

    <!-- {{ Form::open(["url" => "/users/create"]) }} -->
    {{ Form::open(array("url"=>url("/users/create"), "class"=>"create-form")) }}

        {{ Form::label('username','Username: ',array("class"=>"label")) }}
        <!-- {{ Form::text('username') }} -->
        {{ Form::input('text','username','Bubba Hotep',['class'=>'label']) }}
        {{ $errors->first('username') }}
        {{ Form::label('password','Password: ') }}
        <!-- {{ Form::password('password') }} -->
        <!-- {{ Form::text('password','test',['class'=>"herro","type"=>"password"]) }} -->
        {{ Form::password('password',array('class'=>'label','placeholder'=>'Somebody stop me!')) }}
        {{ $errors->first('password') }}

        {{ Form::submit('Create User') }}
    {{ Form::close() }}

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
<!-- </div> -->
@stop
