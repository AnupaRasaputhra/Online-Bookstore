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
				
				if(isset($_POST['id2'])&& isset($_POST['name2']))
				{
					$ctg=$_POST['id2'];
					$catnm=$_POST['name2'];
					
								
				/*}
				else{
					echo "one or more fields are empty";
				}
				*/
				
				if(isset($_POST["addcat"]))
						{
					
						
						$q="INSERT INTO admin.category VALUES('$ctg','$catnm')";
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
						
					
					
					
					else if(isset($_POST["updatecat"]))	
					{
						$y="UPDATE admin.category SET cat_name='$catnm' WHERE cat_id='$ctg'";
					
						if(!mysql_query($y))
						{
							die('Error :'.mysql_error());
						}	
						else
							{
								echo "<center>1 record updated</center>";
							}
					}
					
					
					
					
					
					
					
					elseif ($_POST["deletecat"]) 
					{
						$s="DELETE FROM admin.category WHERE cat_id='$ctg'";
						
						if(!mysql_query($s))
						{
							die('Error :'.mysql_error());
						}	
						else
							{
								echo "<center>1 record deleted</center>";
							}
						
						
					}	
						}
				else{
					echo "one or more fields are empty";
				}		
				
																		
				  
		?>	
		<a href="D_cat.php"><center>OK</center></a>
		</div>	
</body>					
</html>					
					
