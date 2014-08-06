<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('about', 'AboutController@showAbout');

Route::get('about/contact', 'AboutController@showContact');





Route::get('users', function() {
	// $link = mysql_connect('blah','blah','blah');
	// $query = "SELECT * FROM BLAH";
	// mysql_query($query); // ...
	// echo "Hello world!";

	// $users = DB::table('users')->get();
	// $users = DB::table('users')->find(1);

	// SELECT * FROM users WHERE 'username' != 'allison'; equivalent
	// $users = DB::table('users')->where('username','!=', 'allison')->get();



	// echo "<PRE>";
	// var_dump($users);

	// dd($users); // die(var_dump($users));
	// return $users;



	// $users = User::where('username','!=','allison')->get();
	// $users = User::find(1);
	// $users = User::all;
	// $users = User::find([primary_key]);
	// echo "<PRE>";

	// dd($users);
	// return $users;

	

	// Creating a new user
	// $user = new User;
	
	// $user->username = "Rose"; // new user's name
	// $user->password = Hash::make('123'); // creat a hashed password for '123'
	// $user->save(); // saves the user to the database

	// return User::all();

	// creating a user using the User class
	// User::create([
	// 	'username' => 'myNewUser',
	// 	'password' => Hash::make('123')
	// ]);

	// return User::all();



	// Updating user information
	// Select * from users where id = 1
	// Update * from users where id = 1
	// $user = User::find(1);
	// $user->username = "AllisonLeaLewis";
	// $user->save();

	// return User::all();



	// Deleting a user
	// $user = User::find(5);
	// $user->delete();

	// return User::all();


});