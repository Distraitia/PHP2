@extends('layout.default')
@section('content')
<div class="welcome">
    <h1 class="welcome">Welcome.</h1>
    <h2>What would you like to do?</h2>
    <ul class="options">
    	<li><a href="/users">Users</a></li>
    	<li><a href="/users/create">Create User</a></li>
    	<li><a href="/users/update">Update User</a></li>
    	<li><a href="/users/delete">Delete User</a></li> 
    </ul>
</div>
@stop
