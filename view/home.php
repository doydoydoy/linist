<!DOCTYPE html>
<html>
<head>
	<title>Linist</title>

	<!-- Ubuntu Font -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<!-- Bubbler One & Open Sans Font -->
	<link href="https://fonts.googleapis.com/css?family=Bubbler+One|Open+Sans:300" rel="stylesheet">


	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Font Awesome CDN -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>



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
		}

		#nav-div .list:hover
		{
			color: white; 
		}

		.navigate {
		    
		}

		.navigate li {
		    border-bottom:0px solid #ffffff;
		    list-style:none;
		    padding:8px;
		    margin: 0;
		    background-image: linear-gradient(to right,
		                                     white,
		                                     white  50%,
		                                       #e3e5e8 50%,
		                                      #e3e5e8
		                                      );
		   	background-position: 0 0;
		   	background-size: 200% 100%;
			transition: all .4s ease-in-out;
		    outline: 1px solid black;

		}

		.navigate li:hover {
			background-position: -100% 0%;
		}

		.navigate li i {
		    color:#2b2b2b;
		}

		.navigate li:after {
		    content:' ›';
		    float:right;
		}

		.navigate a {
			color:#2b2b2b;
			border:none;
			text-decoration: none;
		}

		.navigate li:hover a{

		}

		* 
		{
			/*outline: 1px solid green;*/
		}

		.navbar-default .navbar-nav .open .dropdown-menu>li>a,.navbar-default .navbar-nav .open .dropdown-menu 
		{
		    background-color: #fff;
		    color:#000;
		    padding: 10px;
		}

		.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover
		{
			background-color: transparent;
		}


	</style>
</head>
<body>


<div id='nav-div'>
<nav class="navbar navbar-default container-fluid">
  <div class="container-fluid">
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
      <form class="navbar-form pull-left" >
        <div class="input-group" >
          <span class="input-group-addon" style="background-color: rgb(63,67,71); border: 0; color:grey" >
            <span class="glyphicon glyphicon-search "></span>
          </span>
          <input type="text" class="form-control" placeholder="Search Linist" style="background-color: rgb(63,67,71); border: 0; color:white">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/milestone-2/linist/login" class="list" style="margin: 0; padding: 0;">
			<span class="glyphicon glyphicon-pushpin"  style="margin: 15px 0px;"></span>
			</a>
		</li>
        <li><a href="#" style="margin: 0; padding: 0 15px;" class="list">
        	<span class="glyphicon glyphicon-certificate" style="margin: 15px 0px;"></span>
        	<span class="glyphicon glyphicon-triangle-bottom" style="font-size: 10px;">
        </a></li>
        <li class="dropdown">
        	<a href="#" style="margin: 0; padding: 0;" class="list dropdown-toggle" data-toggle='dropdown'>
	        	<img src="../../male.jpg" height="20px" style="margin: 15px 0px;">
	        	<span class="glyphicon glyphicon-triangle-bottom" style="font-size: 10px;"></span>
        	</a>
			
        	<ul class="dropdown-menu" style="width: 150px; margin-top: -13px; margin-right:-30px; border-radius: 4px; transition: transform .15s cubic-bezier(.165,.84,.44,1),opacity .15s cubic-bezier(.165,.84,.44,1);">
        		<li class="">Home</li>
        		<li class="">Home</li>
        		<li role='separator' class="divider"></li>
        		<li class="">Home</li>
        		<li class=""></li>

        	</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<main style="margin: 0 5vw;">
<div class="row" style="padding-top: 30px;">
	<div class="col-lg-10" style="height: 550px; background-color: white; padding-right: 25px;">
		<div style="width: 100%; height: 550px; border-right: 1px solid #e3e5e8;">
		</div>

	</div>
	<div class="col-lg-2" style=" background-color: white; border: 1px solid grey; padding: 0">
		<div style="background: url(../../male.jpg) center/contain no-repeat; height: 125px; width: 125px; margin: 15px auto 10px; outline: 1px solid black;">
			
		</div>
		<div class="text-center" style="margin-bottom: 10px">
			<span>Sissel Yamaguchi</span>
		</div>
		<div>
			<div class="navigate" role="navigation" style="display:initial;"> 
		        <li><a href="/" title="Home"><i class="fa fa-home" aria-hidden="true"></i> Inbox</a></li> 
		        <li><a href="/ask" title="Mail"><i class="fa fa-envelope" aria-hidden="true"> </i> Following</a> </li>
		        <li><a href="/archive" title="Archive" ><i class="fa fa-history" aria-hidden="true"></i> Followers</a> </li>
		        <li><a href="http://espoirthemes.tumblr.com" title="theme credit" ><i class="fa fa-star" aria-hidden="true"></i> Favorites</a> </li>	
			</div>  
		</div>

	</div>
</div>


</main>










<div class="navigate" role="navigation" style="display:none;"> 
        <li><a href="/" title="Home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li> 
        <li><a href="/ask" title="Mail"><i class="fa fa-envelope" aria-hidden="true"> </i> Mail</a> </li><li><a href="/archive" title="Archive" ><i class="fa fa-history" aria-hidden="true"></i> Archive</a> </li><li><a href="http://espoirthemes.tumblr.com" title="theme credit" ><i class="fa fa-star" aria-hidden="true"></i> Theme</a> </li> <br>
</div>  





<script type="text/javascript">
</script>

</body>
</html>