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
				<form class="navbar-form pull-left" id="search_form">
					<div class="input-group">
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-search "></span>
						</span>
						<input type="text" class="form-control" placeholder="Search Linist">
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li class="mobile-nav">
						<a href="/linist/dashboard">
							<span class="glyphicon glyphicon-home"></span>
							&emsp;Dashboard
						</a>
					</li>
					<li class="mobile-nav">
						<a href="/linist/<?= $_SESSION['username'] ?>">
							<span class="glyphicon glyphicon-user"></span>
							&emsp;Profile
						</a>
					</li>
					<li class="mobile-nav">
						<a href="/linist/settings">
							<span class="glyphicon glyphicon-edit"></span>
							&emsp;Settings
						</a>
					</li>
					<li class="mobile-nav">
						<a href="/linist/logout">
							<span class="glyphicon glyphicon-log-out"></span>
							&emsp;Sign Out
						</a>
					</li>

					<li>
						<a href="" class="list">
							<span class="glyphicon glyphicon-pushpin"></span>
						</a>
					</li>
					<li>
						<a href="" style="margin: 0; padding: 0 15px;" class="list">
							<span class="glyphicon glyphicon-plus"></span>
							<span class="glyphicon glyphicon-triangle-bottom"></span>
						</a>
					</li>
					<li class="dropdown">
					<a href="#"  class="list dropdown-toggle" data-toggle='dropdown'>
						<img height="20px" width="20px" style="background: url(<?= $profile['profile_img_link'] ?>) center/cover no-repeat; background-color: white;">
						<span class="glyphicon glyphicon-triangle-bottom"></span>
					</a>
						<ul class="dropdown-menu">
							<li>ACCOUNT</li>
							<li>
								<a href="/linist/dashboard">
									<span class="glyphicon glyphicon-home"></span>
									&emsp;Dashboard
								</a>
							</li>
							<li>
								<a href="/linist/<?= $_SESSION['username'] ?>">
									<span class="glyphicon glyphicon-user"></span>
									&emsp;Profile
								</a>
							</li>
							<li>
								<a href="/linist/settings">
									<span class="glyphicon glyphicon-edit"></span>
									&emsp;Settings
								</a>
							</li>
							<hr>
							<li>
								<a href="/linist/logout">
									<span class="glyphicon glyphicon-log-out"></span>
									&emsp;Sign Out
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</div>