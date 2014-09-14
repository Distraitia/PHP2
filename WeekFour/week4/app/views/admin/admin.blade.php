@extends('layout.default')
@section('content')
Welcome, {{ $userInfo->username }}
<h1 class="comments">Comments</h1>
<h2>admin.blade.php</h2>

<!-- <table>
	<tr>
		<th>
			Username
		</th>
		<th>
			Comment
		</th>
		<th>
			Edit Comment
		</th>
	</tr>
	@foreach ($comments as $comment)
	<tr>
		<td>
			{{ $comment->username }}
		</td>
		<td>
			{{ $comment->comment }}
		</td>
		@if ($comment->user_id === $userInfo->id)
		<td>
			{{ link_to("/comments/edit/$comment->comment_id", "Edit Comment") }}
		</td>
		@endif
	</tr>
	@endforeach
</table> -->

<div class="wrapper-box">
    <div class="comments-container">
    	@foreach ($comments as $comment)
        <div class="comment-block">
            <div class="username-container">
                <span class="username">{{ $comment->username }}</span>
            </div>
            <div class="comment-container">
                <p class="comment">{{ $comment->comment }}</p>
                <!-- <p class="post-time">Posted 5 minutes ago</p> -->
                @if ($comment->user_id === $userInfo->id)
				{{ link_to("/comments/edit/$comment->comment_id", "edit comment") }}
				@endif
            </div>
        </div>
        @endforeach
    </div>


	<div class="comment-form-container">
		{{ Form::open(["url" => "/comments/create","class"=>"comment-form"]) }}
		    <div>
		        {{ Form::label('comment','Comment: ') }}
		        {{ Form::textarea('comment') }}
		        <span style="color:red;">{{ $errors->first('comment') }}</span>
		    </div>

			<div>
				You are about to submit comment as {{ $userInfo->username }}
			</div>

		    <div>
		        {{ Form::submit('Submit Comment') }}
		    </div>
	    {{ Form::close() }}
	</div>

	<div>
		<a href="/logout">Logout</a>
	</div>
</div>
@stop