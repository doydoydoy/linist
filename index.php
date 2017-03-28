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

	case $index."appearance":
		$controller->appearance();
		break;

	case $index."logout":
		$controller->logout();
		break;
	
	default:
		echo "<h1>page not found</h1>";
		break;
}

?>
