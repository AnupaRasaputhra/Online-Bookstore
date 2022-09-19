<?php

	session_start();
	require ("db_connect.php");
	if(isset($_SESSION['id']))
	{
		$userd = $_SESSION['id'];
		userDetails($userd);
	}
	else
	{
		header("Location: loginMN.php");
	}
