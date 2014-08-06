@extends('layout.default')
@section('content')
    <h1 class="delete">You deleted a user.</h1>

    <?php

    $user = User::find(1);
	$user->delete();

	return User::all();

    ?>
@stop
