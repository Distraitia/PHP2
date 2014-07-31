# Models

Model is knowledge. Everything thats related to knowledge of domain.
Model layer is like a domain

Eloquent - ORM (Object relational mapper)
A tool that gives you an easy to query and manipulate
data in the database.

Model represents a full layer

In routes:

Assuming users data
$users = User::all(); // Eloquent syntax select * from users

Abstract logic

$users = User::find(1); // Get user with ID 1

return $user->username; // Or any field

Returning data will be casted to a class


# Databases

1. Create a new database, call it laravel

2. Tell laravel about database

app/configuration/database

Routes file
// Grab record from database

Create users table
username VARCHAR 50 chars, no null
password VARCHAT 60 chars, no null

## Laravels db class

$users = DB::table('users')->get();
return $users;

$users = DB::table('users')->find(1);
$users = DB::table('users')->where('username', '!=', 'dan')->get();
dd($users); // die(var_dump($users));

DB::select('select * from users'); // insert, ect..

## Eloquent

ORM - Object, relational mapper. Map database rows to an object
// When you extend User.php and extend to eloquent, laravel knows theres a Users table, follows a convention and expects a table called Users

$users = User::where('username', '!=', 'dseripap');
$users = User::all();
$users = User::find(1);
// Creating
$user = new User;

$user->username = "NewUser";
$user->password = Hash::make("Password");
$user->save(); // saves to database

return User::all();

// database needs created_at and updated_at timestamps

Users.php

public $timestamp = false

User::create([
'username' => 'Blah',
'password' => 'blah'
]);

// Mass assignment issue

Users.php

protected $fillable = ['username', 'password'] // Which fields may be mass assigned

// Updating user info

$user = $User::find(1);
$user->username = "updated";
$user->save();

// Deleting user

$user = $User::find(2);
$user->delete();



return User::orderBy('username', 'asc')->take(2)->get();
