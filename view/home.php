<!DOCTYPE html>
<html>
<head>
	<title>Linist</title>

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

		main > div[class='row']
		{
			padding-top: 30px;
		}

		main > .row > div:first-child
		{
			padding: 0;
		}

		main .home-left > div:first-child
		{
			border-radius: 5px; 
			overflow: hidden;
		}

		main .home-left > div:first-child > img
		{
			height: 230px;
		}

		main .home-left h1, main .home-left h3, main .home-left h5
		{
			margin: 5px 0;
		}

		main .home-left > div:last-child
		{
			margin: 15px 0;
			border-top: 1px solid #cecece; 
			border-bottom: 1px solid #cecece; 
			padding: 10px 0;
		}

		main .home-left .fa
		{
			margin-right: 10px;
			margin-top: 5px;
		} 


	</style>
</head>
<body style="background-color: white;">


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
        		<li><a href="#"><span class="glyphicon glyphicon-home"></span>&emsp;Dashboard</a></li>
        		<li><a href="#"><span class="glyphicon glyphicon-user"></span>&emsp;Profile</a></li>
        		<li><a href="/linist/profileinfo"><span class="glyphicon glyphicon-edit"></span>&emsp;Profile Info</a></li>
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
		<div>
			<img src="../discover.png" id="profile_image">
		</div>
		<h1><?= $account['fullname'] ?></h1>
		<h3><?= $account['username'] ?></h3>
		<h5><?= $profile['descript'] ?></h5>
		<div>
			<?php
				// Printing Work Section
				if(is_null($profile['work'])||empty($profile['work'])||!isset($profile['work']))
				{
				}
				else
				{ ?>
					<i class="fa fa-users" aria-hidden="true"></i>&nbsp;
					<span><?= $profile['work'] ?></span> <br>
				<?php 
				}

				// Printing Location Section
				if(is_null($profile['location'])||empty($profile['location'])||!isset($profile['location']))
				{
				}
				else
				{ ?>
					<i class="fa fa-globe" aria-hidden="true"></i>&nbsp;
					<span><?= $profile['location'] ?></span> <br>
				<?php 
				}

				// Printing Website Section
				if(is_null($profile['website'])||empty($profile['website'])||!isset($profile['website']))
				{
				}
				else
				{ ?>
					<i class="fa fa-external-link" aria-hidden="true"></i>&nbsp;
					<a href="<?= $profile['website'] ?>"><?= $profile['website'] ?></a>
				<?php 
				}
			?>
			
		</div>

	</div>

	<div class="col-lg-9">
		<div style="width: 100%; height: 550px; /* border-right: 1px solid #e3e5e8; */">
			<div style="padding: 0 10px;">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#overview-tab" aria-controls="overview" role="tab" data-toggle="tab"  style="padding: 15px 30px; display: inline-block;">Overview</a></li>
					<li role="presentation"><a href="#comics-tab" aria-controls="myComics" role="tab" data-toggle="tab"  style="padding: 15px 30px; display: inline-block;">My Comics</a></li>
					<li role="presentation"><a href="#submit-tab" aria-controls="submit" role="tab" data-toggle="tab"  style="padding: 15px 30px; display: inline-block;">Submit Comics</a></li>
					<li role="presentation"><a href="#followers-tab" aria-controls="submit" role="tab" data-toggle="tab"  style="padding: 15px 30px; display: inline-block;">Followers</a></li>
					<li role="presentation"><a href="#following-tab" aria-controls="submit" role="tab" data-toggle="tab"  style="padding: 15px 30px; display: inline-block;">Following</a></li>
					
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="overview-tab">
						<div>
							<h3>Latest Posts</h3>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								Chapter 10: Espada
							</div>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								Chapter 9.1: Hit Me (Chibi)
							</div>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								Chapter 9: Hit Me
							</div>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								Chapter 8: Rev It Up
							</div>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								Chapter 7: Gain
							</div>
						</div>
						<div>
							<h3>Posts of people you follow</h3>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								Gaijin 1: Memory by Monty
							</div>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								mickandbrick: pencil punk! by slickman
							</div>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								xCalibur the quick by xHonor
							</div>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								Midtown Fight by loki4
							</div>
							<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
								Bad Blues Blake by blakeyMD
							</div>
						</div>

					</div>
					<div role="tabpanel" class="tab-pane fade" id="comics-tab">fdslsilfahl</div>
					<div role="tabpanel" class="tab-pane fade" id="submit-tab">
						<form class="" method="POST">
							<br>
							<div class="form-group row">
								<label class="col-lg-4 col-form-label">Comic Post Title</label>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="comicTitle">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-4 col-form-label">Comic Description (Optional)</label>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="comicDesc">
								</div>
							</div>
							<div class="form-group row" style="display: none">
								<label class="col-lg-4 col-form-label">Post Tags </label>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="comicTags">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-4 col-form-label">Comic Image URL Link</label>
								<div class="col-lg-8">
									<input type="text" class="form-control" name="comicImg">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="btn-group row">
									<input type="submit" name="submitComicsBtn" class="btn btn-success">
									<input type="button" name="cancelSubmitBtn" class="btn btn-danger" value="Cancel">
								</div>
							</div>
						</form>
					</div>
					<div role="tabpanel" class="tab-pane" id="followers-tab">followers</div>
					<div role="tabpanel" class="tab-pane" id="following-tab">following</div>

				</div>

			</div>


		</div>

	</div>




</div>


</main>


















<script type="text/javascript">
</script>

</body>
</html>