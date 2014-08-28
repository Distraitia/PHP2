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

// MOVE ALL TO USERSCONTROLLER

// Route::resource('users','UsersController');

Rout::get('login', function() {
	return View::make('login');
});

Route::get('/', 'HomeController@showWelcome');

Route::get('about', 'AboutController@showAbout');

Route::get('about/contact', 'AboutController@showContact');

// Route::get('users', 'AboutController@showUsers');

Route::get('users/create/{username}', 'UsersController@createUser');
// Route::get('users/create/{username}', function($username) {
// 	$user = new User;
	
// 	$user->username = $username; // new user's name
// 	$user->password = Hash::make("123"); // create a hashed password for '123'
// 	$user->save(); // saves the user to the database

// 	return User::all();
// });

Route::get('users/update/{userId}', 'UsersController@updateUser');
// Route::get('users/update/{userId}', function($userId) {
// 	$user = User::find($userId);
// 	$user->username = "Rose Angelica";
// 	$user->save();

// 	return User::all();
// });

Route::get('users/delete/{userId}', 'UsersController@delete');

Route::get('users', 'UsersController@index');

Route::get('users/{username}', 'UsersController@showUser');
// Route::get('users/{username}', function($username) {
// 	// SELECT * FROM users WHERE USERNAME = $username LIMIT 1
// 	$user = User::whereUsername($username)->first();
// 	// return $user;

// 	return View::make('users/member')->with('user',$user);
// });