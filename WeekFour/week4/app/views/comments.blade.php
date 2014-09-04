@extends('layout.default')
@section('content')
<!-- <div class="welcome"> -->
    <h1 class="comments">Comments</h1>
    <h2 class="filename">comments.blade.php</h2>

    <div class="wrapper-box">
        <div class="comments-container">
            <div class="comment-block">
                <div class="username-container">
                    <span class="username">Quick Brown Fox</span>
                </div>
                <div class="comment-container">
                    <p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et hic consectetur, sunt provident, alias possimus? Quod illo facilis animi in hic cumque quis, eum totam, neque eligendi voluptatum tenetur sit.</p>
                    <p class="post-time">Posted 5 minutes ago</p>
                </div>
            </div>
            <div class="comment-block">
                <div class="username-container">
                    <span class="username">Lazy Dog</span>
                </div>
                <div class="comment-container">
                    <p class="comment">One day, I'll get you, you fox bastard!  Just not now.</p>
                    <p class="post-time">Posted 4 minutes ago</p>
                </div>
            </div>
            <div class="comment-block">
                <div class="username-container">
                    <span class="username">Foo Bar</span>
                </div>
                <div class="comment-container">
                    <p class="comment">Hello, world</p>
                    <p class="post-time">Posted 1 minute ago</p>
                </div>
            </div>
        </div>
    </div>

    <!-- {{ Form::open(array("url"=>url("/users/create"), "class"=>"create-form")) }}

        {{ Form::label('username','Username: ',array("class"=>"label")) }}
        {{ Form::input('text','username','Bubba Hotep',['class'=>'label']) }}
        {{ $errors->first('username') }}
        {{ Form::label('password','Password: ') }}
        {{ Form::password('password',array('class'=>'label','placeholder'=>'Somebody stop meh!')) }}
        {{ $errors->first('password') }}

        {{ Form::submit('Create User') }}
    {{ Form::close() }} -->

    <div class="form-wrapper">
        <textarea name="comment">
            The discrete Fourier transform of a real valued signal is conjugate symmetric.
        </textarea>
        <button>Opine.</button>
    </div>

    <h2>What would you like to do?</h2>
    <ul class="options">
    	<li>
            {{ link_to("/users", "View Users",array("class"=>"users-btn block-btn")) }}
        </li>
    	<li>
            {{ link_to("/users/register", "Register New User",array("class"=>"register-btn block-btn")) }}
        </li>
        <li>
            {{ link_to("/", "Go to home",array("class"=>"block-btn view-comments-btn")) }}
        </li>
    </ul>
<!-- </div> -->
@stop
