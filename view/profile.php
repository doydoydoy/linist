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

	<!-- My Media Query for Profile.php -->
	<link href="res/css/media-profile.css" rel="stylesheet">

	<style type="text/css">
		.container-fluid
		{
			padding: 0px; 
			background: white;
		}

		.content
		{
			margin: 0 150px;
		}

		.content > .row
		{
			position: relative;
		}

		main .content #profileImgBorder
		{
			position: absolute; 
			top: 50%; 
			left: 50%; 
			transform: translate(-50%,-65%); 
			padding: 5px; 
			border-radius: 4px; 
			border: 1px solid #eeefff; 
			border-radius: 4px; 
			background-color: white;
		}

		main .content #profileImg
		{
			background: url(<?= $profile['profile_img_link'] ?>) center/cover no-repeat; 
			height: 150px; 
			width: 150px; 
			border-radius: 4px;
		}

		.content > .row:nth-of-type(2) > div:first-child
		{
			margin-top: 60px;
		}

		.content > .row:nth-of-type(2) > div:first-child h1
		{
			font-weight: bold; 
			color: #4f4f4f;
		}

		.content li
		{
			list-style: none;
		}

		.content li ul
		{
			display: inline-block; 
			margin: 0 5px; 
			background-color: #8f8f8f; 
			color: #cecece; 
			font-weight: bold; 
			border-radius: 4px; 
			padding: 3px 6px;
		}

		.content #comic-div
		{
			border: 1px solid #cecece; 
			margin-top: 25px;
			padding: 50px 0;
		}

		.content #comic-div > div:first-child
		{
			padding: 15px 30px;
		}

		.content #comic-div > div:first-child > img
		{
			height: auto; 
			max-width: 100%;
			margin-bottom: 50px;
		}

		.content #comic-div > div:first-child > *
		{
			color: black;
		}

		.content #comic-div > div:first-child > form 
		{
			margin-top: 20px;
			font-size: 30px; 
			padding: 15px 0;
		}

		.content #comic-div > div:first-child > form > *
		{
			margin: 0 40px;
			font-weight: bold;
		}

		.content #author-div
		{
			border: 1px solid #cecece;
			border-top: 0; 
			padding: 10px 0; 
			overflow: hidden;
		}

		.content #author-div #profileImg2
		{
			background: url(<?= $profile['profile_img_link'] ?>) center/cover no-repeat; 
			height: 150px;
			border: 1px solid #cecece;
		}

		.content #author-div .col-lg-9
		{
			padding: 20px 10px;
		}

		.content #author-div .col-lg-9 p
		{
			color: grey;
		}

		.content #author-div .col-lg-9 p h4
		{
			margin: 10px 0
		}

		.content #author-div .col-lg-9 p h4
		{
			margin: 5px 0 0;
		}




	</style>

</head>
<body>

<main class="container-fluid">
	<div style="background: url(http://argentaplus.com.ar/wp-content/uploads/2016/01/06.jpg) center/cover no-repeat; height: 50vh;">
		
	</div>
	<div class="content">
		<div class="row">
			<div id="profileImgBorder">
				<div id="profileImg">
				</div>				
			</div>
		</div>
		<div class="row">
			<div class='text-center'>
				<h1><?= $profile['series'] ?></h1>
			</div>
			<div class="text-center">
				<form>
					<li>
						<a href="/linist/jonathan?archives=true"><ul>Archives</ul></a>
						<input type="hidden" name="username" value="<?= $account['username'] ?>">
						<?php 
						if(isset($_SESSION['acct_id']))
						{
							if($account['id']!=$_SESSION['acct_id'])
							{
								$flw_flag = false;
								while($follow = mysqli_fetch_assoc($follows))
								{
									if($follow['follower_id']==$_SESSION['acct_id'])
									{
										?>
						<button style="background: transparent; border: 0;" name="btn_unfollow"><ul id="unfollow">Unfollow</ul></button>
										<?php
										$flw_flag = true;
									}

								}
								if(!$flw_flag)
								{
									?>
						<button style="background: transparent; border: 0;" name="btn_follow"><ul>Follow</ul></button>
									<?php
								}
							}							
						}
						?>
					</li>
				</form>
			</div>
		</div>
		<div class="row" id="comic-div">
			<div class="text-center">
				<img src="<?= $img ?>">
				<h3><?= $title ?></h3>
				<p><?= $desc ?></p>
				<form method="POST">
					<!-- add conditionals here -->
					<?php

					if (isset($_GET['page'])&&$_GET['page']==0) 
					{
						?>
					<a><span class="glyphicon glyphicon-menu-left" style="visibility: hidden;"></span></a>
						<?php
					}
					else
					{
						?>
					<a href="/linist/<?= $account['username'].'?page='.($_GET['page']-1) ?>"><span class="glyphicon glyphicon-menu-left" title="Next Comic" name='btn_next'></span></a>
						<?php
					}
					?>
					<button type="submit" style="background: transparent; border: 0;" name="btn_rand"><i class="fa fa-random" aria-hidden="true" title="Random Comic"></i></button>

					<?php

					if ($_GET['page']==$post_ctr-1) 
					{ 
						?>
					<a><span class="glyphicon glyphicon-menu-right" style="visibility: hidden;"></span></a>
						<?php
					}
					else
					{
						?>
					<a href="/linist/<?= $account['username'].'?page='.($_GET['page']+1) ?>"><span class="glyphicon glyphicon-menu-right" title="Previous Comic" name='btn_prev'></span></a>
						<?php
					}

					?>

				</form>
			</div>
		</div>
		<div class="row" id="author-div">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
				<div id="profileImg2">
				</div>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-9 col-xs-9">
				<p><?= $date ?></p>
				<h4>Created by: <?= $account['username'] ?></h4>
				<h5><em>"<?= $profile['descript'] ?>"</em></h5>
			</div>
		</div>
		<!-- <div class="row" style="border: 1px solid #cecece; border-top: 0; padding: 15px;">
			<h3 style="margin: 0">Comments</h3>
			<div style="margin: 15px 15px 10px 15px; border-bottom: 1px solid #cecece">
				<h4>Names <small>Date</small></h4>
				<p style="margin-bottom: 2px">I like your comic. Keep it up.</p>
			</div>
			<div style="margin: 15px 15px 10px 60px; border-bottom: 1px solid #cecece">
				<h4>Names <small>Date</small></h4>
				<p style="margin-bottom: 2px">I like your comic. Keep it up.</p>
			</div>
			<div style="margin: 15px 15px 10px 15px; border-bottom: 1px solid #cecece">
				<h4>Names <small>Date</small></h4>
				<p style="margin-bottom: 2px">I like your comic. Keep it up.</p>
			</div>
		</div>
		<div class="row">
			<form method="POST" style="padding: 15px; border: 1px solid #cecece; border-top: 0">
				<label>Logged in as: <?= $_SESSION['username'] ?> </label><br>
				<textarea style="resize: none;" rows="5" cols="100" maxlength="1000" placeholder="Comment..." ></textarea>
				<input type="submit" name="btn_submitComics" class="btn btn-default" style="margin-bottom: 25px; margin-left: 15px">
			</form>
		</div> -->
	</div>
</main>


<div>
	<?php include('view/footer.php'); ?>
</div>

</body>
</html>