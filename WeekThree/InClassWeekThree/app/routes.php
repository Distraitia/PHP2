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


Route::get('users', function()
{

    /**
     * Deleting a user
     */

    $user = User::find(5);
    $user->delete();

    return User::all();




    /**
     * Updating user information
     */

    // Select * from users where id = 1
    // Update * from users where id = 1 ... ... .
    // $user = User::find(1);
    // $user->username = "daniel2";
    // $user->save();

    // return User::all();









    /**
     * Creating a user using the User class
     */

    // User::create([
    //     'username'  =>  'myNewUser',
    //     'password'  =>  Hash::make('abc123') // md5('blah') sha1('blah');
    //     ]);

    // return User::all();






    /**
     * Creating a new user
     */

    // $user = new User;

    // $user->username = "Buddy"; // New user's username
    // $user->password = Hash::make('abc123'); // Create a hashed password for 'abc123'
    // $user->save(); // Saves the user to the database

    // return User::all();






    // $users = User::all(); // All users
    // $users = User::find(primary_key); // Find user by PK
    // $users = User::where('username', '!=', 'daniel'); // find specifics

    // return $users;










    // $users = DB::table('users')->get();
    // $users = DB::table('users')->find(1);
    // SELECT * FROM users WHERE 'username' != 'daniel'
    // $users = DB::table('users')->where('username', '!=', 'daniel')->get();

    // echo "<PRE>";
    // dd($users); // die(var_dump($users));
    // return $users;

});
