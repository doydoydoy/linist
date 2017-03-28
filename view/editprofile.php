<!DOCTYPE html>
<html>
<head>

	<title>Settings - Edit Profile Info</title>

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
	<script src="https://use.fontawesome.com/4a55acc96a.js"></script>

	<style type="text/css">

		*, * *
		{
			box-sizing: border-box;
		}

		body
		{
			position: relative;
		}

		#nav-div 
		{
			background-color: #161616; 
			padding: 0px 5px 0 5px; 
			height: 50px; 
			/*position: absolute; */
			width: 100%;
			/*z-index: 1;*/
		}

		#nav-div .navbar
		{
			background-color: #161616; 
			border: 0; 
			margin-top: 0; 
			margin-bottom: 0;
			z-index: 1;

		}

		#nav-div .navbar-brand
		{
			color: white; 
			font-family: 'Ubuntu'; 
			font-weight: bold; 
			letter-spacing: 3px;
		}

		#nav-div .glyphicon-pencil
		{
			font-size: 12px;
		}

		#nav-div .navbar-form
		{
			padding: 0;
		}

		#nav-div .input-group-addon
		{
			background-color: #f7f7f7;
		}

		#nav-div input
		{
			background-color: #f7f7f7; 
			width: 20vw;
		}

		#nav-div .list
		{
			color: grey; 
			font-weight: bold; 
			font-size: 16px;
			margin: 0; 
			padding: 0;
		}

		#nav-div .list .glyphicon-triangle-bottom
		{
			font-size: 10px;
		}

		#nav-div .list .glyphicon:first-child
		{
			margin: 15px 0px;
		}

		#nav-div .list:hover
		{
			color: white; 
		}

		#nav-div .dropdown > a
		{
			margin: 15px 0px;
		}

		#nav-div .dropdown-menu
		{
			width: 200px; 
			margin-top: -13px; 
			margin-right:-30px; 
			border-radius: 4px; 
			transition: transform .15s cubic-bezier(.165,.84,.44,1),opacity .15s cubic-bezier(.165,.84,.44,1);
			padding: 0; 
			border-radius: 4px;
		}

		#nav-div .dropdown-menu > li:first-child
		{
			font-weight: bold;
			background-color:#f2f2f2; 
			padding: 5px; 
			border-radius: 4px 4px 0 0; 
			color: #8f8f8f;
		}

		#nav-div .dropdown-menu > li
		{
			padding: 7px 5px;
		}

		#nav-div .dropdown-menu > li:last-child
		{
		}

		#nav-div .dropdown-menu > li > a
		{
			padding: 0px 5px 0px;
		}

		.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover
		{
			background: transparent;
		}

		#nav-div .dropdown-menu > li > a:hover
		{
			background-color: white;
		}

		#nav-div .dropdown-menu hr
		{
			margin: 5px 0;
		}

		#nav-div .input-group-addon
		{
			background-color: rgb(63,67,71); 
			border: 0; 
			color:grey;
		}

		#nav-div input[type='text']
		{
			background-color: rgb(63,67,71); 
			border: 0; 
			color:white;
		}

		main form > div
		{
			margin: 30px 0;
		}

		main form .row
		{
			padding: 0px 0 10px;
		}


	</style>
</head>
<body>

<div id='nav-div'>
<nav class="navbar navbar-default container-fluid">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <span class="glyphicon glyphicon-pencil"></span> 
        <span>linist</span>
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form pull-left">
        <div class="input-group">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-search "></span>
          </span>
          <input type="text" class="form-control" placeholder="Search Linist">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/milestone-2/linist/login" class="list">
			<span class="glyphicon glyphicon-pushpin"></span>
			</a>
		</li>
        <li><a href="#" style="margin: 0; padding: 0 15px;" class="list">
        	<span class="glyphicon glyphicon-plus"></span>
        	<span class="glyphicon glyphicon-triangle-bottom">
        </a></li>
        <li class="dropdown">
        	<a href="#"  class="list dropdown-toggle" data-toggle='dropdown'>
	        	<img height="20px" width="20px" style="background: url(../discover.png) center/cover no-repeat; ">
	        	<span class="glyphicon glyphicon-triangle-bottom"></span>
        	</a>
			
        	<ul class="dropdown-menu">
        		<li>ACCOUNT</li>
        		<li><a href="/linist/dashboard"><span class="glyphicon glyphicon-home"></span>&emsp;Dashboard</a></li>
        		<li><a href="/linist/<?= $_SESSION['username'] ?>"><span class="glyphicon glyphicon-user"></span>&emsp;Profile</a></li>
        		<li><a href="/linist/settings"><span class="glyphicon glyphicon-edit"></span>&emsp;Settings</a></li>
        		<hr>
        		<li><a href="/linist/logout"><span class="glyphicon glyphicon-log-out"></span>&emsp;Sign Out</a></li>
        	</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>


<main class="container">
<div class="row">

	<div class="col-lg-3 home-left">
		<div class="list-group" style="margin-top: 30px;">
			<p href="" class="list-group-item" style="font-weight: bold;
			background-color:#f2f2f2; 
			padding: 5px 12px; 
			border-radius: 4px 4px 0 0; 
			color: #8f8f8f;">Settings</p>
			<a href="/linist/settings" class="list-group-item" style="border-left: 5px solid salmon; font-weight: bold;">Profile Info</a>
			<a href="/linist/account" class="list-group-item">Account</a>
			<a href="/linist/appearance" class="list-group-item">Profile Appearance</a>
			<a href="/linist/settings" class="list-group-item">Follows</a>
		</div>
	</div>

	<div class="col-lg-9" style="margin-top: 30px;">
		<h2 style="margin-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #eee; color: #444">Profile Info</h2>
		<form method="POST" style="">
			<div class="col-lg-7">
				<div class="row">
					<div class="">
						<label>Fullname</label><br>
					</div>
					<div class="">
						<input type="text" class="form-control" value="<?= $_SESSION['fullname'] ?>"></input>
					</div>
				</div>
				<div class="row">
					<div class="">
						<label>Bio</label>
					</div>
					<div class="">
						<textarea class="form-control" style="resize: none;"><?= $profile['descript'] ?></textarea>
					</div>
				</div>
				<div class="row">
					<div class="">
						<label>Series</label>
					</div>
					<div class="">
						<input type="text" class="form-control" value="<?= $profile['series'] ?>"></input>
					</div>
				</div>
				<div class="row">
					<div class="">
						<label>Profile Image Link</label>
					</div>
					<div class="">
						<input type="text" class="form-control" value="<?= $profile['profile_img_link'] ?>"></input>
					</div>
				</div>
				<div class="row">
					<div class="">
						<label>Location</label>
					</div>
					<div class="">
						<input type="text" class="form-control" value="<?= $profile['location'] ?>"></input>
					</div>
				</div>
				<div class="row">
					<div class="">
						<label>Work / Affiliation</label>
					</div>
					<div class="">
						<input type="text" class="form-control" value="<?= $profile['work'] ?>"></input>
					</div>
				</div>
				<div class="row">
					<input type="submit" class="btn" style="border-color: rgba(27,31,35,0.35); background-color: #e6ebf1; background-image: linear-gradient(-180deg, #f0f3f6 0%, #e6ebf1 90%); font-weight: bold;"></input>
				</div>
			</div>
			<div class="col-lg-5" style="">
				<div style="background-color: black; height: 200px; width: 200px; margin: auto; border-radius: 4px;">
				</div>
			</div>
		</form>
	</div>
</div>

</main>


</body>
</html>