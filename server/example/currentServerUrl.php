<?php

$returnArray = array(
	//path to this file
	'updateServerUrl' => "http://domain/path_to/currentServerUrl.php",
	
	//path to config.php file where the actual dynamic config is generated
	'configServerUrl' => "http://domain/path_to/config.php"
);

header('Content-type: application/json');
echo json_encode($returnArray);
?>