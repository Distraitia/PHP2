@extends('layout.default')
@section('content')
<div class="update">
    <h1>This is update.blade.php</h1>
	<!-- <div class="update"></div>
	    <h1 class="update">You updated user <span class="username">Rose</span>.</h1>
	    <a href="index.html">Go back</a>
	</div> -->
   
    {{ link_to("/users/delete/$user->id", "Delete Me!") }}

    {{ Form::open(["url" => "/users/update"]) }}
    <div>
        {{ Form::label('username','New Username: ') }}
        {{ Form::text('username', $user->username) }}
        {{ $errors->first('username') }}
    </div>
    <div>
        {{ Form::label('password','New Password: ') }}
        {{ Form::password('password') }}
        {{ $errors->first('password') }}
    </div>

    <div>
        {{ Form::submit('Create User') }}
    </div>
    {{ Form::close() }}
    {{ link_to("/users/delete/$user->id", "Delete Me!") }}
</div>
@stop
