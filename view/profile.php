<!DOCTYPE html>
<html>
<head>
	<title>Linist: <?= $account['username'] ?></title>

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

</head>
<body>

<main class="container-fluid" style="padding: 0px; background: white;">
	<div style="background: url(http://hd-wall-papers.com/download.php?id=1520991&w=1920&h=1200&pic=/images/wallpapers/comic-hd-wallpaper/comic-hd-wallpaper-9.jpg) center/cover no-repeat; height: 50vh;;">
		
	</div>
	<div style="margin: 0 150px;">
		<div class="row" style="position: relative">
			<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-65%); padding: 5px; border-radius: 4px; border: 1px solid #eeefff; border-radius: 4px; background-color: white;">
				<div style="background: url(<?= $profile['profile_img_link'] ?>) center/cover no-repeat; height: 150px; width: 150px; border-radius: 4px; ">
				</div>				
			</div>
		</div>
		<div class="row">
			<div class='text-center' style="margin-top: 60px;">
				<h1 style="font-weight: bold; color: #4f4f4f;"><?= $profile['series'] ?></h1>
			</div>
			<div class="text-center">
				<li style="list-style: none">
					<ul style="display: inline-block; list-style: none; margin: 0 5px; background-color: #8f8f8f; color: #cecece; font-weight: bold; border-radius: 4px; padding: 3px 6px;">Archives</ul>
					<!-- <ul style="display: inline-block; list-style: none; padding: 0 10px; background-color: #8f8f8f; color: #cecece; font-weight: bold; border-radius: 4px; padding: 3px 6px;">Dashboard</ul> -->
					<ul style="display: inline-block; list-style: none; margin: 0 5px; background-color: #8f8f8f; color: #cecece; font-weight: bold; border-radius: 4px; padding: 3px 6px;">Follow</ul>
				</li>
			</div>
		</div>
		<div class="row" style="border: 1px solid #cecece; margin: 20px 0;">
			<div class="text-center" style="padding: 15px 30px">
				<img src="http://files.explosm.net/comics/Dave/magiclamp.png" style="height: auto; max-width: 100%;">
				<h3 style="color: black;">Magic Lamp</h3>
				<p style="color: black;">Descript</p>
				<div style="color: black; font-size: 30px; padding: 5px 0">
					<span class="glyphicon glyphicon-menu-left" style="padding: 0 40px; font-weight: bold;"></span>
					<i class="fa fa-random" aria-hidden="true" style="padding: 0 40px; font-weight: bold;"></i>
					<span class="glyphicon glyphicon-menu-right" style="padding: 0 40px; font-weight: bold;"></span>
				</div>
			</div>
			<div style="border-top: 1px solid #cecece; padding: 10px 0; overflow: hidden;">
				<div class="col-lg-2">
					<div style="background: url(<?= $profile['profile_img_link'] ?>) center/cover no-repeat; height: 150px;">
					</div>
				</div>
				<div class="col-lg-9" style="padding: 20px 10px">
					<p style="color: grey">Date</p>
					<!-- <h3 style="margin: 10px 0 5px"><?= $account['fullname'] ?></h3> -->
					<h4 style="margin: 10px 0">Created by: <?= $account['username'] ?></h4>
					<h5 style="margin: 5px 0 0"><em>"<?= $profile['descript'] ?>"</em></h5>
				</div>
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>
</main>

</body>
</html>