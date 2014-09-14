@extends('layout.default')
@section('content')
    <h1>Hello, {{ $user->username }}!</h1>
 
	<h1 class="register">Member Profile</h1>
    <h2 class="filename">member.blade.php</h2>

    <div class="update-form-container container">
        <h2>Update<br>Information</h2>
        {{ Form::open(["url" => "/users/update"]) }}

            {{ Form::label('username','New Username: ') }}
            {{ Form::text('username', $user->username) }}
            {{ Form::hidden('userId', $user->id) }}
            {{ $errors->first('username') }}

            {{ Form::label('password','New Password: ') }}
            {{ Form::password('password', array("placeholder"=>"New Password")) }}
            {{ $errors->first('password') }}

            {{ Form::submit('Update User',array("class"=>"update-btn")) }}
            
        {{ Form::close() }}
    </div>
    {{ link_to("/users/delete/$user->id", "Delete Me!") }}
@stop