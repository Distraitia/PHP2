<?php

class UsersController extends \BaseController {

	public function index() {
		// return User::all();
		$users = User::all();

		return View::make('users/index')->with('users',$users);
	}

	public function login() {
		return View::make('login');
	}

	// public function createUser($username) {
	public function createUser() {
		$validation = Validator::make(Input::all(), ['username' => 'required', 'password' => 'required']);

		if ($validation->fails()) {
			// return "Validation failed.";
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		$user = new User;
	
		$user->username = Input::get('username'); // new user's name
		$user->password = Hash::make(Input::get('password')); // create a hashed password for '123'
		$user->save(); // saves the user to the database

		// return User::all();
		return Redirect::to('/users');

		// return "You're trying to create something.";
		// return Input::all();
	}

	// public function updateUser($userId) {
	public function updateUser() {
		// $user = User::find($userId);
		// $user->username = "Leroy Jenkins";
		// $user->save();

		// return User::all();

		// return "You should be updated.";
		$user = User::find(Input::get('userId'));
		$user->username = Input::get('username');

		if (Input::get('password')) {
			$user->password = Hash::make(Input::get('password'));
		}
		$user->save();

		// return User::all();
		return Redirect::to('/users');

		// return Input::get();
	}

	public function deleteUser($userId) {
		// echo $userId;
		// print_r($userId);
		// die();
		$user = User::find($userId);
		$user->delete();

		return User::all();
	}

	public function showUser($username) {
		$user = User::whereUsername($username)->first();
		// echo "<a href='http://localhost:8000'>Go back</a>";
		return View::make('users/member')->with('user',$user);
	}

	public function registerUser() {
		return View::make('users/register');
	}

	public function viewComments() {
		return View::make('comments');
	}
}