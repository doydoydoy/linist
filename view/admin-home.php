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

	<!-- My Media Query CSS -->
	<link rel="stylesheet" href="res/css/media-query.css">


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

		main > div[class='row']
		{
			padding-top: 30px;
		}

		main > .row > div:first-child
		{
			padding: 0;
		}

		main #home-left > div:first-child
		{
			border-radius: 5px; 
			overflow: hidden;
		}

		main #home-left > div:first-child > div
		{
			height: 230px;
			width: 100%;		
		}

		main #home-left h1, main #home-left h3, main #home-left h5
		{
			margin: 5px 0;
		}

		main #home-left > div:last-child
		{
			margin: 15px 0;
			border-top: 1px solid #cecece; 
			border-bottom: 1px solid #cecece; 
			padding: 10px 0;
		}

		main #home-left .fa
		{
			margin-right: 10px;
			margin-top: 5px;
		} 


	</style>
</head>
<body style="background-color: white;">

<div>
<?php include('view/header.php'); ?>
</div>

<main class="container">
	<div class="row">

		<div class="col-lg-3 col-md-3 col-sm-3" id="home-left">
			<div  id="profile-image-div">
				<div style="background: url(<?php 
							if (is_null($profile['profile_img_link'])||empty($profile['profile_img_link'])||!isset($profile['profile_img_link']))
							{
								echo 'http://www.freeiconspng.com/uploads/no-image-icon-15.png';
							}
							else
							{
								echo $profile['profile_img_link'];
							}?>) center/cover no-repeat;" id="profile_image">
				</div>
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
					{ 
					?>
						<i class="fa fa-external-link" aria-hidden="true"></i>&nbsp;
						<a target="_new" href="<?= $profile['website'] ?>"><?= $profile['website'] ?></a>
					
					<?php
					}
				?>
			</div>
		</div>

		<div class="col-lg-9 col-md-9 col-sm-9" id="home-right">
			<div style="width: 100%; /* border-right: 1px solid #e3e5e8; */">
				<div style="padding: 0 10px;">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#overview-tab" aria-controls="overview" role="tab" data-toggle="tab"  style="">
								Overview
							</a>
						</li>
						<li role="presentation">
							<a href="#comics-tab" aria-controls="myComics" role="tab" data-toggle="tab"  style="">
								My Comics
							</a>
						</li>
						<li role="presentation">
							<a href="#submit-tab" aria-controls="submit" role="tab" data-toggle="tab"  style="">
								Submit Comics
							</a>
						</li>
						<li role="presentation">
							<a href="#followers-tab" aria-controls="submit" role="tab" data-toggle="tab"  style="">
								Followers
							</a>
						</li>
						<li role="presentation">
							<a href="#following-tab" aria-controls="submit" role="tab" data-toggle="tab"  style="">
								Following
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="overview-tab">
							<div>
								<h3>Latest Posts</h3>
								
								<?php
									$flag = [];
									$ctr = 1;
									foreach($posts_arr as $post)
									{
										if(empty($flag[$post["username"]])||is_null($flag[$post["username"]])||!isset($flag[$post["username"]]))
										{
											$flag[$post['username']]=0;
										}
										$modalId="Latest".$post['id'];
										?>
										<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
											<a style="text-decoration: none; color: black;" href="/linist/<?= $post['username'].'?page='.$flag[$post['username']]; ?>"><?= $post['title'] ?></a>
											<input type="button" name="btn_delete" value="Delete" class="pull-right" style="background: transparent; border: 0; margin: 0; padding: 0 15px" data-toggle='modal' data-target='#deleteModal<?= $modalId ?>'>
											<input type='button' class="pull-right" value="Edit" style="background: transparent; border: none; padding: 0 15px" data-toggle='modal' data-target='#editModal<?= $modalId ?>'>
											<label class="pull-right">by <?= $post['username'] ?></label>

										</div>

										<?php
										include('view/editmodal.php');
										include('view/deletemodal.php');
										$flag[$post['username']]++;
										if($ctr==5)
										{
											break;
										}
										else
										{
											$ctr++;
										}

									}
								?>


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
						<div role="tabpanel" class="tab-pane fade" id="comics-tab">
							<h3><?= $profile['series'] ?></h3>
							<?php
								$flag = [];
								foreach($posts_arr as $post)
									{
										$modalId=$post['id'];
										if(empty($flag[$post["username"]])||is_null($flag[$post["username"]])||!isset($flag[$post["username"]]))
										{
											$flag[$post['username']]=0;
										}
										?>
											<div style="padding: 5px 15px; border-bottom: 1px solid #cecece">
													<span>
														<a style="text-decoration: none; color: black;" href="/linist/<?= $post['username'].'?page='.$flag[$post['username']]; ?>"><?= $post['title'] ?></a>
													</span>
													<input type="button" name="btn_delete" value="Delete" class="pull-right" style="background: transparent; border: 0; margin: 0; padding: 0 15px" data-toggle='modal' data-target='#deleteModal<?= $modalId ?>'>
													<input type='button' class="pull-right" value="Edit" style="background: transparent; border: none; padding: 0 15px;" data-toggle='modal' data-target='#editModal<?= $modalId ?>'>
													<label class="pull-right">by <?= $post['username'] ?></label>


											</div>
							<?php		
										include('view/deletemodal.php');
										include('view/editmodal.php');
										$flag[$post['username']]++;
									}

							?>
							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="submit-tab">
							<form class="" method="POST">
								<h3>New Comic</h3>
								<hr style="margin: 10px 0px 20px">
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
										<input type="submit" name="btn_submitComics" class="btn btn-success">
										<input type="button" name="btn_cancelComics" class="btn btn-danger" onclick="window.location.href='/linist/';" value="Cancel"></input>
									</div>
								</div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="followers-tab">
							<?php
							foreach ($follower_arr as $follow) 
							{
								if($follow['following_id']==$_SESSION['acct_id'])
								{
									?>
									<div style="padding: 15px 30px">
										<a href="/linist/<?= $follow['username'] ?>"><img src="<?= $follow['profile_img_link'] ?>" height='50px' width='50px' style="margin-right: 30px"></a>
										<label><?= $follow['fullname'] ?></label>
										<!-- <input class="pull-right btn btn-warning" type="button" name="btn_unfollow" value="Unfollow"> -->
									</div>
									<?php
								}
							}	
							?>
						</div>
						<div role="tabpanel" class="tab-pane" id="following-tab">
						
							<?php
							foreach ($followed_arr as $follow) 
							{
								if($follow['follower_id']==$_SESSION['acct_id'])
								{
									?>
									<form method="POST">
										<div style="padding: 15px 30px">
											<a href="/linist/<?= $follow['username'] ?>"><img src="<?= $follow['profile_img_link'] ?>" height='50px' width='50px' style="margin-right: 30px"></a>
											<label><?= $follow['fullname'] ?></label>
											<input type="hidden" name="username" value="<?= $follow['username'] ?>">
											<input class="pull-right btn btn-warning" type="submit" name="btn_unfollow" value="Unfollow">
										</div>
									</form>

									<?php
								}
							}	
							?>
						</div>

					</div>

				</div>


			</div>

		</div>




	</div>


</main>


<div>
	<?php include('view/footer.php'); ?>
</div>




<script type="text/javascript">
	// document.location.href = String( document.location.href ).replace( /#editModal/, "" );


	// document.location.href = String( document.location.href ).replace(/([^\d]*)(\d*)([^\w]*)/, replacer);
	// function replacer(match, p1, p2, p3, offset, string) {
	// 	// p1 is nondigits, p2 digits, and p3 non-alphanumerics
	// 	return [p1, p2, p3].join(' - ');
	// }
	// console.log(newString);  // abc - 12345 - #$*%

	// $(function()
	// {
	// 	$('#follow').on('click', function()
	// 	{
	// 		$.ajax(
	// 		{
	// 			url: 'view/calculate.php',
	// 			data: {
	// 			} 

	// 		});

	// 	});
	// });


</script>

</body>
</html>