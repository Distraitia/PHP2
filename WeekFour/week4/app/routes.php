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

Route::get('login', 'UsersController@login');

Route::get('/', 'HomeController@showWelcome');

Route::get('about', 'AboutController@showAbout');

Route::get('about/contact', 'AboutController@showContact');

Route::get('users/create/{username}', 'UsersController@createUser');

Route::get('users/update/{userId}', 'UsersController@updateUser');

Route::get('users/delete/{userId}', 'UsersController@deleteUser');

Route::get('users', 'UsersController@index');

Route::get('users/{username}', 'UsersController@showUser');