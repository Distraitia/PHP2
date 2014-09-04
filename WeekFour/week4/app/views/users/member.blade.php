@extends('layout.default')
@section('content')
<!-- <div class="users"> -->
    <h1>Hello, {{ $user->username }}!</h1>
    <!-- {{ link_to("/users/delete/$user->id", "Delete Me!") }} -->
    <!-- {{ link_to("/users/update/$user->id", "Update me to Leroy Jenkins!") }} -->
    <h1></h1>
<!-- </div> -->
	<h1 class="register">Member Profile</h1>
    <h2 class="filename">member.blade.php</h2>

    <!-- a form that links to post_login.php, and the information is posted, so the user can't see the information in the url -->
	<!-- <form action="" method="POST">
		<input name="username" type="text" placeholder="username">
		<input name="password" type="text" placeholder="password">
		<button type="submit">Login</button>
	</form> -->

    {{ Form::open(["url" => "/users/update"]) }}
    <div>
        {{ Form::label('username','New Username: ') }}
        {{ Form::text('username', $user->username) }}
        {{ Form::hidden('userId', $user->id) }}
        {{ $errors->first('username') }}
    </div>
    <div>
        {{ Form::label('password','New Password: ') }}
        {{ Form::password('password') }}
        {{ $errors->first('password') }}
    </div>

    <div>
        {{ Form::submit('Update User') }}
    </div>
    {{ Form::close() }}
    {{ link_to("/users/delete/$user->id", "Delete Me!") }}
@stop