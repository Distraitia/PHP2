@extends('layout.default')
@section('content')

<h1>Edit Comment</h1>
<h2>edit_comment.blade.php</h2>

<div class="update-comment-container container">
	<h4>Current Comment</h4>
	<p>
		<!-- <pre> -->
		{{ $comment->comment }}
		<!-- </pre> -->
	</p>


	{{ Form::open(["url" => "/comments/update"]) }}

        {{ Form::label('comment','New Comment: ') }}
        {{ Form::textarea('comment',$comment->comment) }}
        {{ Form::hidden('comment_id',$comment->comment_id) }}
        <span style="color:red;">{{ $errors->first('comment') }}</span>

        {{ Form::submit('Edit Comment') }}

	{{ Form::close() }}
</div>

@stop