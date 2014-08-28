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

	public function createUser($username) {
		$user = new User;
	
		$user->username = $username; // new user's name
		$user->password = Hash::make("123"); // create a hashed password for '123'
		$user->save(); // saves the user to the database

		echo "<a href='http://localhost:8000'>Go back</a>";
		return User::all();

		echo "<a href='http://localhost:8000'>Go back</a>";
	}

	public function updateUser($userId) {
		$user = User::find($userId);
		$user->username = "Leroy Jenkins";
		$user->save();

		return User::all();
	}

	public function deleteUser($userId) {
		// echo $userId;
		// print_r($userId);
		// die();
		$user = User::find($userId);
		$user->delete();

		echo "<a href='http://localhost:8000'>Go back</a>";

		return User::all();
	}

	public function showUser($username) {
		$user = User::whereUsername($username)->first();
		echo "<a href='http://localhost:8000'>Go back</a>";
		return View::make('users/member')->with('user',$user);
	}

	public function create($username) {
		// $user = new User;
	
		// $user->username = $username; // new user's name
		// $user->password = Hash::make("123"); // create a hashed password for '123'
		// $user->save(); // saves the user to the database

		// return User::all();
	}

	public function update() {
		// $user = User::find(1);
		// $user->username = "Jeremy Angelica";
		// $user->save();

		// return User::all();
	}

	public function show() {
		return "test";
	}
}