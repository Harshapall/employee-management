<?php 
	//Connection
	define('SITEURL', 'http://localhost/employe/');
	define('LOCALHOST', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'employe');
	$con  = mysqli_connect(LOCALHOST,USERNAME,PASSWORD);
	$db_select = mysqli_select_db($con,DATABASE);
?>