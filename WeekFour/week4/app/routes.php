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

Route::get('users', 'AboutController@showUsers');

Route::get('users/create', 'AboutController@createUser');

Route::get('users/update', 'AboutController@updateUser');

Route::get('users/delete', 'AboutController@deleteUser');