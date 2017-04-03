<!DOCTYPE html>
<html>
<head>
	<title>Linist - Register</title>

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
			background: linear-gradient(rgba(255, 255, 255, 0.6),rgba(255, 255, 255, 0.6)),url(res/img/register.jpg) center/cover no-repeat;
		}

		.linist-icon-div
		{
			padding-top: 14px; 
			padding-bottom: 10px;
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
			margin: auto;
			margin-top: 8px;
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

		main input[type='submit']
		{
			background-image: linear-gradient(-180deg, #34d058 0%, #28a745 90%);
		}

		main .btn:hover
		{
		    background-image: linear-gradient(-180deg, #2fcb53 0%, #269f42 90%);
		}

		footer
		{
			margin-top: 30px;
			padding-bottom: 20px;
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
				<h3>Sign up to Linist</h3>
			</div>
			<br>

			<form method="POST">
				<label>Full Name</label>
				<div class="login-input-div">
					<input type="text" class="form-control" name="fullname"></input>
				</div>
				<label>Username</label>
				<div class="login-input-div">
					<input type="text" class="form-control" name="username"></input>
				</div>
				<label>Password</label>
				<div class="login-input-div">
					<input type="password" class="form-control" name="password"></input>
				</div>
				<label>Confirm Password</label>
				<div class="login-input-div">
					<input type="password" class="form-control" name="conf-password"></input>
				</div>
				<div>
					<input type="submit" class="form-control btn btn-info" value="Sign Up" name="btn_register"></input>
				</div>
				<div style="padding-top: 10px" class="text-center">
					<span>Already Registered? <a href="/linist/login"> Sign In. </a></span>
				</div>
			</form>
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



<script type="text/javascript">
	
</script>

</body>
</html>