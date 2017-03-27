<!DOCTYPE html>
<html>
<head>
	<title>Linist - Sign In or Sign Up</title>

	<!-- Ubuntu Font -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<!-- Bubbler One & Open Sans Font -->
	<link href="https://fonts.googleapis.com/css?family=Bubbler+One|Open+Sans:300" rel="stylesheet">

	<!-- Lato Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">

	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Font Awesome CDN -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

	<!-- Shortcut JS -->
	<script type="text/javascript" src='http://www.openjs.com/scripts/events/keyboard_shortcuts/shortcut.js'></script>

	<style type="text/css">
		
		*, * *
		{
			box-sizing: border-box;
		}

		body
		{
			background: linear-gradient(rgba(255, 255, 255, 0.6),rgba(255, 255, 255, 0.6)),url(res/img/login.jpg) center/cover no-repeat;
			height: 100vh;
			 
		}

		.linist-icon-div
		{
			padding-top: 32px; 
			padding-bottom: 24px;
		}

		.linist-icon
		{
			background: url(res/img/icon/pencil-icon.svg) center/contain no-repeat; 
			height: 70px; 
			width: 70px; 
			margin: auto; 
		}

		main .login-div
		{
			margin: auto; margin-top: 16px; 
			width: 308px; 
			padding: 20px; 
			border: 1px solid #ccc; 
			border-radius: 4px; 
			background: white;
		}

		main .login-div h3
		{
			font-family: 'Lato', sans-serif; 
			font-weight: 900; 
			font-size: 24px; 
			margin: 0;
		}

		main .login-div label
		{
			font-family: 'Segoe UI', Helvetica, Arial, sans-serif;
		}

		main .login-div .login-input-div
		{
			margin: 5px 0 15px;
		}

		main input[type='button']
		{
			background-image: linear-gradient(-180deg, #34d058 0%, #28a745 90%);
		}

		main .row .new-linist-div
		{
			margin: auto; 
			margin-top: 16px; 
			width: 308px; 
			padding: 15px 20px; 
			border: 1px solid #ccc; 
			border-radius: 4px; 
			background: white;
		}

		main .new-linist-div span
		{
			font-size: 14px; 
			font-family: 'Segoe', sans-serif;
		}

		footer
		{
			margin-top: 80px;
			padding-bottom: 10px;
		}

		footer div
		{
			margin: auto; 
			width: 308px; 
			margin: auto; 
			padding: 5px; 
			border: 1px solid #ccc; 
			border-radius: 4px; 
			background: white;
		}

		footer div a
		{
			color: #9b9b9b; 
			font-size:12px; 
			padding: 5px;
		}

	</style>

</head>
<body>

<div class="linist-icon-div">
	<div class="linist-icon">
	</div>
</div>

<main class="container-fluid">
	
	
	<div class="row">
		<div class="login-div">
			<div class="row text-center">
				<h3>Sign in to Linist</h3>
			</div>
			<br>

			<form method="POST">
				<label>Username</label>
				<div class="login-input-div">
					<input type="text" class="form-control" name="username"></input>
				</div>
				<label>Password</label>
				<div class="login-input-div">
					<input type="password" class="form-control" name="password"></input>
				</div>
				<div>
					<input type="submit" class="form-control btn btn-success" value="Sign In" name="btn_login"></input>
				</div>
			</form>
		</div>	
	</div>
	<div class="row">
		<div class="text-center new-linist-div">
			<span>New to Linist?
				<a href="/linist/register">Create new account.</a>
			</span>
		</div>
	</div>
</main>

<footer>
	<div class="text-center">
		<a>Terms</a>
		<a>Privacy</a>
		<a>Security</a>
		<a>Contact Linist</a>
	</div>
</footer>

</body>
</html>