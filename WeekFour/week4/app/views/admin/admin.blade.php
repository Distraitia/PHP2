@extends('layout.default')
@section('content')
<!-- Welcome, {{ $userInfo->username }} -->
<h1 class="comments">Comments</h1>
<h2>admin.blade.php</h2>

<div class="wrapper-box">
    <div class="comments-container">
    	@foreach ($comments as $comment)
        <div class="comment-block">
            <div class="username-container">
                <span class="username">{{ $comment->username }}</span>
            </div>
            <div class="comment-container">
                <p class="comment">{{ $comment->comment }}</p>
                @if ($comment->user_id === $userInfo->id)
				{{ link_to("/comments/edit/$comment->comment_id", "edit comment") }}
				@endif
            </div>
        </div>
        @endforeach
    </div>


	<div class="comment-form-container">
		{{ Form::open(["url" => "/comments/create","class"=>"comment-form"]) }}
		    <!-- <div> -->
		        {{ Form::label('comment','Comment: ') }}
		        {{ Form::textarea('comment') }}
		        <span style="color:red;">{{ $errors->first('comment') }}</span>
		    <!-- </div> -->

			<p>(You are about to submit comment as {{ $userInfo->username }})</p>

		    <!-- <div> -->
		        {{ Form::submit('Submit Comment') }}
		    <!-- </div> -->
	    {{ Form::close() }}
	</div>
</div>

<div>
	<a class="outside-link" href="/logout">Logout</a>
</div>
@stop