@extends('layout.default')
@section('content')
<h1>Login</h1>
<h2>login.blade.php</h2>
<!-- a form that links to post_login.php, and the information is posted, so the user can't see the information in the url -->

<div class="login-form-container clearfix">
	<h2>Login</h2>
{{ Form::open(['route' => 'sessions.store',"class"=>"login-form"]) }}

	{{ Form::label('username','Username: ') }}
	{{ Form::text('username') }}

	{{ Form::label('password','Password: ') }}
	{{ Form::password('password') }}

	{{ Form::submit('Login',array("class"=>"login-btn")) }}

{{ Form::close() }}
</div>

@stop