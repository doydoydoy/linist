<?php 

session_start();
if(!isset($_SESSION['username'])){
	$_SESSION['username']="";
	$_SESSION['role']="";
} 


// // Call Controller and Model scripts
require_once('controller/controller.php');
require_once('model/model.php');

// // Create an instance of a controller
$controller = new Controller();

/** URI Routing **/
// route of the request
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// root uri - change where index.php is located
$index = substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], '/index.php')+1);

/** URI Routing for usernames **/
// Get all username to route to correct page later
$result = $controller->getUsername();
// false if uri is not referrirng to a username, true if connected to a username. ie. /linist/jonathan
$x = false;

switch ($uri) {
	case $index:
		$controller->main();
		break;

	case $index."login":
		$controller->login();
		break;

	case $index."dashboard":
		header('location: /linist/');
		$controller->main();
		break;

	case $index."register":
		$controller->register();
		break;

	case $index."settings":
		$controller->settings();
		break;

	case $index."account":
		$controller->settAccount();
		break;

	case $index."appearance":
		$controller->settAppearance();
		break;

	case $index."logout":
		$controller->logout();
		break;

	case $index."profile":
		if(isset($_SESSION['username']))
		{
			while ($row = mysqli_fetch_assoc($result)) 
				{
					if($row['username']==$_SESSION['username'])
					{
						header('location: /linist/'.$row['username']);
					}
				}
		}
		else
		{
			echo "<h1>page not found</h1>";
		}
		break;		
	
	default:
		while ($row = mysqli_fetch_assoc($result)) 
		{
			if($index.$row['username']==$uri)
			{
				if (isset($_GET['page'])) 
				{
					$controller->account($row['id'], true);
					$x=true;
				}
				else
				{
					$controller->account($row['id'], false);
					$x=true;
				}
			}
		}
		if($x==false)
		{
			echo "<h1>page not found</h1>";
		}
		break;
}

?>
