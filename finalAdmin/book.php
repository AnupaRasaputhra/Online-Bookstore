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

		
<body >
<div class="content">
				<h2> <center>Admin Report</center> </h2>
				
				<?php
				
				if ((isset($_POST["id1"]))&& (isset($_POST["name1"]))&& (isset($_POST["publisher"]))&& (isset( $_POST["isbn"]))&& (isset($_POST["price"]))&& (isset($_POST["cat_id"]))&& (isset($_POST['des_id']))) 
				{
					
					$bk=$_POST['id1'];
					$name=$_POST['name1'];
					$publishers=$_POST['publisher'];
					$code=$_POST['isbn'];
					$price=$_POST['price'];
					$cat=$_POST['cat_id'];
					$des=$_POST['des_id'];
					$img="upload_image";
					$page=$_POST['page'];
					$edition=$_POST['edition'];
				/*}
				else 
				{
					echo"One or more fields are empty";
				}
					*/
					if(isset($_POST["addbk"]))
						{
					
						
						$q="INSERT INTO admin.books VALUES('$bk','$name','$cat','$des','$publishers','$edition','$code','$page','$price','$img')";
						$r=mysql_query($q);
		
						
						//if(!mysql_query($q))
						//{
							//die('Error :'.mysql_error());
						//}	
						//else
							//{
								echo "<center>1 record inserted</center>";
								//echo'<a href="index.php"><center>'.OK.'</center></a>';
							//}
						}				
					
					
					else if(isset($_POST["updatebk"]))	
					{
						$y="UPDATE admin.books SET b_name='$name',b_cat='$cat',b_desc='$des' ,b_publisher='$publishers',b_edition='$edition',b_isbn='$code',b_page='$page',b_price='$price',b_img='$img' WHERE b_id='$bk'";
					
					
					
						if(!mysql_query($y))
						{
							die('Error :'.mysql_error());
						}	
						else
							{
								echo "<center>1 record updated</center>";
							}
					}
					
										
					
					
					else if ($_POST["deletebk"]) 
					{
						$s="DELETE FROM admin.books WHERE b_id='$bk'";
						
						if(!mysql_query($s))
						{
							die('Error :'.mysql_error());
						}	
						else
							{
								echo "<center> 1 record deleted </center>";
							}
						
						
					}	
								
				}
				else 
				{
					echo"One or more fields are empty";
				}
																		
				  
		?>	
		
	
			<a href="D_book.php"><center>OK</center></a>
			
		
</div>			
</body>					
</html>					
					
					
					
					
					
					
																		
		
