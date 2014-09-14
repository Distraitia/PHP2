<h1>Edit Comment</h1>
<h2>edit_comment.blade.php</h2>

<h4>Current Comment</h4>
<p>
	<pre>
	{{ $comment->comment }}
	</pre>
</p>

{{ Form::open(["url" => "/comments/update"]) }}
	    <div>
	        {{ Form::label('comment','New Comment: ') }}<br>
	        {{ Form::textarea('comment') }}
	        {{ Form::hidden('comment_id',$comment->comment_id) }}
	        <span style="color:red;">{{ $errors->first('comment') }}</span>
	    </div>

	    <div>
	        {{ Form::submit('Edit Comment') }}
	    </div>
{{ Form::close() }}