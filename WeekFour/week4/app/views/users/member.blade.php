@extends('layout.default')
@section('content')
<div class="users">
    <h1>Hello, {{ $user->username }}!</h1>
    {{ link_to("/users/delete/$user->id", "Delete Me!") }}
    {{ link_to("/users/update/$user->id", "Update me to Leroy Jenkins!") }}
</div>
@stop