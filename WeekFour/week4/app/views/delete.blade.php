@extends('layout.default')
@section('content')
	<div class="delete">
	    <h1 class="delete">You deleted a user.</h1>
	    <a href="index.html">Go back</a>
	</div>
    <?php

    $user = User::find(1);
	$user->delete();

	return User::all();

    ?>
@stop
