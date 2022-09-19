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
			width: 800px;
			margin-left: 200px;
			margin-right:100px;
			margin-top:100px;	
			}
			a{
				color: white;
			}
			
		</style>
	</head>

		
<body >
	<?php
	$f=mysql_query("SELECT * FROM admin.books");

?>
<a href="Admin_Home.php" style="color: white;"><center>Admin-Home</center></a>

<div class="content">
	
<table  border="1" style="border-style: solid; border-width: thin; " >
	<caption>BOOKS</caption>
	<tr>
		<th>book_id</th>
		<th >description</th>
		</tr>
	<?php
	
	while($row=mysql_fetch_array($f)){
		
		echo "<tr>";
		echo "<td>".$row['b_id']."</td>";
		echo "<td >".$row['b_desc']."</td>";
			echo "</tr>";
	}
		
	echo "</table>";
	echo "<br/>";	
	
	
	?>
</div>
</body>
</html>

