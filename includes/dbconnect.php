<?php
	
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "tryp");
	
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	
	if(mysqli_connect_errno()){
		die("Database connection failed".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
?>