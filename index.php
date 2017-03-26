<?php 

// // Call Controller and Model scripts
// require_once('controller.php');
// require_once('model.php');

// // Create an instance of a controller
// $controller = new Controller();

/** URI Routing **/
// route of the request
$uri =  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// root uri - change where index.php is located
$index = substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], '/index.php')+1);

switch ($uri) {
	case $index:
		include('view/intro.php');
		break;

	case $index."login":
		include('view/login.php');
		break;

	case $index."register":
		include('view/register.php');
		break;
	
	default:
		echo "<h1>page not found</h1>";
		break;
}

?>
