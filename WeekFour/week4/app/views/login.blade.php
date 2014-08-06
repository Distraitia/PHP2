@extends('layout.default')
@section('content')
<h1>Login</h1>
<!-- a form that links to post_login.php, and the information is posted, so the user can't see the information in the url -->
<form action="index.php?page=post_login" method="POST">
	<!-- $_POST['username'] and $_POST['password'] information is posted -->
	<input name="username" type="text" placeholder="username">
	<input name="password" type="text" placeholder="password">
	<button type="submit">Login</button>
</form>
@stop