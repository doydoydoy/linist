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

		#nav-div .mobile-nav
		{
			display: none;
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

		@media screen and (max-width: 992px)
		{

			body
			{
			}

			main #profile-img-div
			{
				display: none;
			}
		}

		@media screen and (max-width: 768px)
		{
			#nav-div nav #search_form, #nav-div nav .navbar-nav li
			{
				display: none;
			}

			#nav-div nav .navbar-nav .mobile-nav
			{
				display: block;
			}

			#nav-div nav .navbar-nav .mobile-nav a
			{
				color: white;
			}


			#nav-div nav .navbar-nav .mobile-nav:hover
			{
				background: #cecece;
			}


			.navbar-default .navbar-collapse, .navbar-default .navbar-form
			{
				border: 0;
			}


			main #profile-image-div
			{
				padding-bottom: 20px;
			}

			main #profile-image-div #profile_image
			{
				width: 200px;
				height: 200px;
				margin: auto;
			}

			main .row #home-left
			{
				padding: 0 20px;
			}
		}


	</style>
</head>
<body>

<?php include('view/header.php'); ?>

<main class="container">
<div class="row">

	<div class="col-lg-3 col-md-3 home-left">
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

	<div class="col-lg-9 col-md-9" style="margin-top: 30px;">
		<h2 style="margin-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #eee; color: #444">Profile Info</h2>
		<form method="POST" style="">
			<div class="col-lg-7 col-md-7">
				<div class="row">
					<div>
						<label>Fullname</label><br>
					</div>
					<div>
						<input type="text" class="form-control" value="<?= $_SESSION['fullname'] ?>" name='fullname'></input>
					</div>
				</div>
				<div class="row">
					<div>
						<label>Bio</label>
					</div>
					<div>
						<textarea class="form-control" style="resize: none;" maxlength="255" name="bio"><?= $profile['descript'] ?></textarea>
					</div>
				</div>
				<div class="row">
					<div>
						<label>Series</label>
					</div>
					<div>
						<input type="text" class="form-control" value="<?= $profile['series'] ?>" name="series"></input>
					</div>
				</div>
				<div class="row">
					<div>
						<label>Profile Image Link</label>
					</div>
					<div>
						<input type="text" class="form-control" value="<?= $profile['profile_img_link'] ?>" name="profile_img"></input>
					</div>
				</div>
				<div class="row">
					<div>
						<label>Location</label>
					</div>
					<div>
						<input type="text" class="form-control" value="<?= $profile['location'] ?>" name="location"></input>
					</div>
				</div>
				<div class="row">
					<div>
						<label>Work / Affiliation</label>
					</div>
					<div>
						<input type="text" class="form-control" value="<?= $profile['work'] ?>" name="work"></input>
					</div>
				</div>
				<div class="row">
					<div>
						<label>Website</label>
					</div>
					<div>
						<input type="text" class="form-control" value="<?= $profile['website'] ?>" name="website"></input>
					</div>
				</div>
				<div class="row">
					<input type="submit" class="btn" style="border-color: rgba(27,31,35,0.35); background-color: #e6ebf1; background-image: linear-gradient(-180deg, #f0f3f6 0%, #e6ebf1 90%); font-weight: bold;" name="btn_profileInfo"></input>
				</div>
			</div>
			<div class="col-lg-5 col-md-5" id="profile-img-div">
				<div style="margin: auto; width: 200px;">
					<label>Profile Picture</label>
					<div style="background: url(<?php 
						if (is_null($profile['profile_img_link'])||empty($profile['profile_img_link'])||!isset($profile['profile_img_link']))
						{
							echo "http://www.freeiconspng.com/uploads/no-image-icon-15.png";
						}
						else
						{
							echo $profile['profile_img_link'];
						}


							?>) center/cover no-repeat; height: 200px; width: 200px; border-radius: 4px;">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

</main>

<?php include('view/footer.php'); ?>

</body>
</html>