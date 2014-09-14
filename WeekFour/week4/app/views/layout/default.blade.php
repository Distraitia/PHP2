<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 2 Week 4 Homework</title>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,700|Josefin+Slab:300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/ui-kit.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</head>
<body class="gradient">
	<header>
		<!-- <div class="options-menu"> -->
        <h2>What would you like to do?</h2>
        <ul class="options">
        	<li>   
                {{ link_to("/users", "View Users",array("class"=>"users-btn")) }}
            </li>
            <li>
                {{ link_to("/admin", "View Comments",array("class"=>"view-comments-btn")) }}
            </li>
        	<li>
                {{ link_to("/users/register", "Register New User",array("class"=>"register-btn")) }}
            </li>
            <li>
            	{{ link_to("/login", "Login",array("class"=>"login-link")) }}
            </li>
            <li>
            	{{ link_to("/logout", "Logout",array("class"=>"logout-link")) }}
            </li>
        </ul>
    <!-- </div> -->
	</header>
    <!-- <div class="content"> -->
        @yield('content')
    <!-- </div> -->
</body>
</html>
