<?php
	include "db_connect.php";
	?>
	<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<style>
			body{
				background-image:url("images/templatemo_body.jpg");
			}
			.content{
				
			border-radius:5px;
			background-color:#e6e6e6;
			padding: 50px 50px 50px;
			border: 2px;			
			width: 200px;
			margin-left: 520px;
			margin-top:100px;	
			}
		</style>
	</head>

	<body>	
		<div class="content">	
				<h2> <center>Admin Report</center> </h2>
				
				<?php
				
				if(isset($_POST['id4'])&& isset($_POST['name4'])&& isset($_POST['email4'])&& isset($_POST['query']))
				{
					$cid=$_POST['id4'];
					$cname=$_POST['name4'];
					$cemail=$_POST['email4'];
					$query=$_POST['query'];
					
								
				}
				else{
					echo "one or more fields are empty";
				}
				
				
				if(isset($_POST["addc"]))
						{
					
						
						$q="INSERT INTO admin.contacts VALUES('$cid','$cname','$cemail','$query')";
						$r=mysql_query($q);
						
						
						//if(!mysql_query($q))
						//{
							//die('Error :'.mysql_error());
						//}	
						//else
							//{
								echo "<center>1 record inserted</center>";
							//}
					
						}
						
					
					
					
					else if(isset($_POST["updatec"]))	
					{
						$y="UPDATE admin.contacts SET con_name='$cname',con_email='$cemail',con_query='$query' WHERE con_id='$cid'";
					
						if(!mysql_query($y))
						{
							die('Error :'.mysql_error());
						}	
						else
							{
								echo "<center>1 record updated</center>";
							}
					}
					
					
					
					
					
					
					
					elseif ($_POST["deletec"]) 
					{
						$s="DELETE FROM admin.contacts WHERE con_id='$cid'";
						
						if(!mysql_query($s))
						{
							die('Error :'.mysql_error());
						}	
						else
							{
								echo "<center>1 record deleted</center>";
							}
						
						
					}	
								
				
																		
				  
		?>	
		<a href="D_contact.php"><center>OK</center></a>	
</div>
</body>					
</html>					
					
