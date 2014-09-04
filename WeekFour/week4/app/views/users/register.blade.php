@extends('layout.default')
@section('content')
<!-- <div class="register"> -->
    <h1 class="register">Register</h1>
    <h2 class="filename">register.blade.php</h2>

    <!-- a form that links to post_login.php, and the information is posted, so the user can't see the information in the url -->
	<!-- <form action="" method="POST">
		<input name="username" type="text" placeholder="username">
		<input name="password" type="text" placeholder="password">
		<button type="submit">Login</button>
	</form> -->

    {{ Form::open(["url" => "/users/create"]) }}
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
