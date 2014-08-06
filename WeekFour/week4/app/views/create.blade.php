@extends('layout.default')
@section('content')
    <h1 class="create">You created a user, <span class="username">Rose</span>.</h1>

    <!-- <form action="users/post_create" method="POST">
		<input name="username" type="text" placeholder="username">
		<input name="password" type="text" placeholder="password">
		<button type="submit">Create User</button>
	</form> -->
	<?php 

	$user = new User;
	
	$user->username = "Rose"; // new user's name
	$user->password = Hash::make("123"); // create a hashed password for '123'
	$user->save(); // saves the user to the database

	return User::all();

	// creating a user using the User class
	// User::create([
	// 	'username' => 'Rose',
	// 	'password' => Hash::make('123')
	// ]);

	// return User::all();

	?>
@stop
