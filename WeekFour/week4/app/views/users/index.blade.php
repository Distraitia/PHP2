@extends('layout.default')
@section('content')
<div class="users">
    <h1 class="users">Users</h1>
    <!--  dd($users)->toArray()  -->
    <ul class="users">
    	@foreach($users as $user)
    	<li>{{ link_to("/users/$user->username", $user->username) }}</li>
    	@endforeach
    </ul>
    <?php
	    
    ?>
    {{ link_to("/","Go back") }}
</div>
@stop