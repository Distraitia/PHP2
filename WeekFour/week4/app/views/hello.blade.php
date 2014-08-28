@extends('layout.default')
@section('content')
<div class="welcome">
    <h1 class="welcome">Welcome.</h1>

    <!-- a form that links to post_login.php, and the information is posted, so the user can't see the information in the url -->
	<form action="" method="POST">
		<!-- $_POST['username'] and $_POST['password'] information is posted -->
		<input name="username" type="text" placeholder="username">
		<input name="password" type="text" placeholder="password">
		<button type="submit">Login</button>
	</form>

    <h2>What would you like to do?</h2>
    <ul class="options">
    	<li><a href="/users">Users</a></li>
    	<li><a href="http://localhost:8000/users/create/Hodor">Create User Hodor</a></li>
    	<li><a href="/users/update">Update User</a></li>
    	<li><a href="/users/delete">Delete User</a></li> 
    </ul>
</div>
@stop
