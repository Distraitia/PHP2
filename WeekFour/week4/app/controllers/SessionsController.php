<?php

class SessionsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function create()
	{
		// if returns true, log user in
		if (Auth::check()) {
			// If logged in, return the user to homepage()
			return Redirect::to('admin');
		} else {
			// if not logged in, show the login form
	        return View::make('sessions.login');
        }
	}

	public function logout() {
		Auth::logout();

		return Redirect::to("login");
	}

	public function store() {
		// $validation = Validator::make(Input::all(), ['username' => 'required', 'password' => 'required']);
		// Attempt to authenticate the user with only inputs called username and password


		if (Auth::attempt(array(
			'username'=>Input::get('username'), 
			'password' => Input::get('password')))) {
			// if it's successful, just dump the data
			// return Auth::user()->id;
			// return Auth::user()->username;
			return Redirect::to('admin');
			// return Auth::user();
		} else {
			// If failed, just print fail message
			return "Login failed.";
		}

		return "Hello!";
	}

}