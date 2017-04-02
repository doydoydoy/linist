
<!DOCTYPE html>
<html>
<head>
	<title>Linist - A Community for Comics</title>

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

  <!-- Shortcut JS -->
  <script type="text/javascript" src='http://www.openjs.com/scripts/events/keyboard_shortcuts/shortcut.js'></script>

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
    position: absolute; 
    width: 100%;
    z-index: 1;
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
    color: white; 
    font-weight: bold; 
    padding: 15px 0; 
    font-size: 15px;
  }

  #nav-div .nav-or
  {
    color: #474747; font-weight: bold;  padding: 15px 0; font-size: 15px;
  }

  #banner
  {
    background: linear-gradient(rgba(0, 0, 0, 0.1),rgba(0, 0, 0, 0.1)), url(res/img/banner.jpg) right/cover no-repeat;
    position: relative; 
    height: 100vh; 
  }

  #banner .row > div
  {
    color: white; 
    /*text-shadow: #000 0px 0px 1px; */
    top: 50%; left: 50%; 
    transform: translate(-50%, -50%); 
    position: absolute; 
    width: 25%;
  }

  #banner .row > div
  {
    font-family: 'Ubuntu';
  }

  #banner .row h1
  {
    font-weight: bold; 
    font-size: 50px;
  }

  #banner .row > div p
  {
    margin: 5px 0;
    /*letter-spacing: 1px;*/
    font-size: 16px;
  }

  #banner form > div
  {
    padding: 5px 0;
  }

  #banner form > input
  {
    border-radius: 0; 
    box-shadow: 0;
  }

  #discover h2
  {
    font-family: 'Bubbler One', sans-serif; font-weight: bold; 
    letter-spacing: 3px;
  }

  #discover .comic-feat
  {
     height: 70vh; 
     width: 30vw;
  }




  


  </style>

</head>
<body>

<div id='nav-div'>
<nav class="navbar navbar-default container">
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
          <span class="input-group-addon" style="" >
            <span class="glyphicon glyphicon-search " ></span>
          </span>
          <input type="text" class="form-control" placeholder="Search Linist" style="">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/linist/login" class="list">Sign In</a></li>
        <li><a class="nav-or">&nbsp;&nbsp;or&nbsp;&nbsp;</a></li>
        <li><a href="/linist/register" class="list">Sign Up</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<section id="banner">
  <div class="container">
    <div class="row">
      <div>
        <h1 class="text-center">linist</h1>
        <h3 class="text-center">Discover. Read. Draw.</h3>
        <h5 class="text-center">
        <p>Join and read comics with us.</p>
        <p>Interact with artists around here.</p>
        <p>Share your love of comics to the world.</p>
        </h5>
        <form>
          <div>
            <a href="/linist/register"><input type="button" value="Get Started" class="form-control btn btn-info"></input></a>
          </div>
          <div>
            <a href="/linist/login"><input type="button" value="Sign In" class="form-control btn btn-default"></input></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- <section style="height: 100vh" id="discover">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="text-center">Discover new comics<br> you haven't thought of yet.</h2>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-4">
        <div class="comic-feat" style="background: url(http://vignette4.wikia.nocookie.net/shokugekinosoma/images/b/b1/Volume_1.jpg/revision/latest?cb=20150830174739) center/contain no-repeat;"></div>
      </div>
    </div>
  </div>
</section>
 -->

</body>
</html>

