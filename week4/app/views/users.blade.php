@extends('layout.default')
@section('content')
<div class="users">
    <h1 class="users">Users</h1>
    <?php
	    $users = DB::table('users')->get();
	    // echo "<PRE>";
	    var_dump($users);
    ?>
    <a href="index.html">Go back</a>
</div>
@stop
