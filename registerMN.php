<?php

	require 'db_connect.php';

	if(isset($_POST['register']))
	{
		if(!empty($_POST['name']) &&  !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordAgain']))
		{
			if(strlen($_POST['name']) < 4 || strlen($_POST['password']) < 4 )
			{
				echo "User name and password Must be at least 4 characters";
			
			}
			else
			{
				if(preg_match ('%^[A-Za-z\.\'\-]{2,15}$%',stripslashes(trim($_POST['name']))))
				{
					$user_name    = $_POST['name'];
											
					if(preg_match ('%^[A-Za-z0-9._\%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$%', stripslashes(trim($_POST['email']))))
					{
						$email = $_POST['email'];
											
						$pass  = $_POST['password'];
				
						if($pass == $_POST['passwordAgain'])
						{
							$password     =  $_POST['password']; 	
															
							$query = "SELECT user_email FROM admin.login WHERE user_email= '$email' ";
							$run   = mysqli_query($con_str, $query) or die("Can't Execute Query...");
																
							$rows  = mysqli_num_rows($run);
							if($rows > 0)
							{
								echo "The email address you have entered is already registered";
							}
							else
							{										
								$query2 = "INSERT INTO admin.login VALUES ('$user_name','$email','$password')";
																	
								$run2   = mysqli_query($con_str, $query2) or die("Can't Execute Query...");
								header("Location: login.php");
							}
					}
					else
					{
						$pass = false;
						echo "Password does not match confirmation";
					}
														
				}
				else
				{
					echo "Invalid Email";
				}
			}
				
		}
	}
	else
	{
		$_POST['username'] = false;
		echo "Invalid username";
	}
			
}	
		
else
{			
	echo "Please fill in all of the required fields";
}
