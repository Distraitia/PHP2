@extends('layout.default')
@section('content')
<h1>Login</h1>
<h2>login.blade.php</h2>
<!-- a form that links to post_login.php, and the information is posted, so the user can't see the information in the url -->

<div class="login-form-container container clearfix">
	<h2>Login</h2>
{{ Form::open(['route' => 'sessions.store',"class"=>"login-form"]) }}

	{{ Form::label('username','Username: ') }}
	{{ Form::input("text","username",null,["placeholder"=>"Username"]) }}

	{{ Form::label('password','Password: ') }}
	{{ Form::password('password', array("placeholder"=>"Password")) }}

	{{ Form::submit('Login',array("class"=>"login-btn")) }}

{{ Form::close() }}
</div>

@stop