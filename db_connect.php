<?php

	//Connect to the database...
	$mysql_host = "localhost";
	$mysql_user = "root";
	$mysql_pass = "";
	$mysql_db = "admin";

	$con_str = mysqli_connect($mysql_host, $mysql_user, $mysql_pass) or die("Can't Connect...");

	mysqli_select_db($con_str, $mysql_db) or die("Can't Connect to Database...");
	
?>