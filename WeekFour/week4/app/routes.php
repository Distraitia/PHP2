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
Route::resource('sessions',"SessionsController");

Route::get('login', 'SessionsController@create');
Route::get('logout','SessionsController@logout');

Route::get('admin','HomeController@admin')->before('auth');

Route::get('/', 'HomeController@showWelcome');

// Route::get('users/create/{username}', 'UsersController@createUser');
Route::post('users/create', 'UsersController@createUser');

// Route::get('users/update/{userId}', 'UsersController@updateUser');
Route::post('users/update', 'UsersController@updateUser');

Route::get('users/delete/{userId}', 'UsersController@deleteUser');

Route::get('users', 'UsersController@index');

Route::get('users/profile/{username}', 'UsersController@showUser');

Route::get('users/register','UsersController@registerUser');

Route::get('comments','UsersController@viewComments');

Route::post('comments/create','CommentsController@create')->before('auth');
Route::get("comments/edit/{commentId}","CommentsController@edit")->before('auth');
Route::post("comments/update","CommentsController@update")->before('auth');