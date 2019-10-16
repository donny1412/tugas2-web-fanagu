<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'tourism';
	
	//create connection
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
	//Check connection 
	if (!$conn) {
		die('Failed to connect: ' . mysqli_connect_error());
	} 	
?>	
