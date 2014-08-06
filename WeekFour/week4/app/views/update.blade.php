@extends('layout.default')
@section('content')
<div class="update">
    <h1 class="update">You updated user <span class="username">Rose</span>.</h1>

    <?php

    // Select * from users where id = 1
	// Update * from users where id = 1
	$user = User::find(1);
	$user->username = "Rose Angelica";
	$user->save();

	return User::all();

    ?>
</div>
@stop
