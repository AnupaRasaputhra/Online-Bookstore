<?php
 
	session_start();

	require 'db_connect.php';
	
	if(isset($_SESSION['id']))
	{
		$userd = $_SESSION['id'];
		header("Location: home.php");	
	}
	
	if(isset($_POST['login']))
	{
		if(!empty($_POST['email']) && !empty($_POST['password']))
		{
			
			if(preg_match ('%^[A-Za-z0-9._\%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$%', stripslashes(trim($_POST['email']))))
			{
				$email = $_POST['email'];
				$password  = $_POST['password'];
				//$q="INSERT INTO admin.history ('user_email','user_name') VALUES('$email','$username')";
				$query     = "SELECT * FROM admin.login WHERE user_email = '$email' AND user_password = '$password' ";
				$run       = mysqli_query($con_str, $query) or die("Can't Execute Query...");
			
				$rows      = mysqli_num_rows($run);
			  			
				if($rows == 1)
				{
					$fetch = mysqli_fetch_assoc($run);
					$username = $fetch['user_name'];
					//$id       = $fetch['id'];
					$_SESSION['id'] = $username;
					
					header("Location: index.php");
				}
				else
				{
					echo "Password and user name does not match!";
				}
			}
			else
			{
				echo "Invalid Email";
			}
		
		}
		else
		{
			echo "Please fill in all of the required fields";
		}
	}
