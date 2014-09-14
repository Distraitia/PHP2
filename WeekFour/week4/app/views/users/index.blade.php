@extends('layout.default')
@section('content')
<!-- <div class="users"> -->
    <h1 class="users">Users</h1>
    <h2 class="filename">index.blade.php</h2>
    <!--  dd($users)->toArray()  -->
    <div class="users-container container">
        <h2>Current Users</h2>
        <ul class="users">
        	@foreach($users as $user)
        	<li>{{ link_to("/users/profile/$user->username", $user->username) }}</li>
        	@endforeach
        </ul>
    </div>
   
    {{ link_to("/","Go back",array('class'=>'back-btn block-btn')) }}
    {{ link_to("/users/register", "Register New User",array("class"=>"register-btn block-btn")) }}
    {{ link_to("admin", "View Comments",array("class"=>"block-btn view-comments-btn")) }}
    <!-- <a href="/users/register">Register a new user</a> -->
<!-- </div> -->
@stop