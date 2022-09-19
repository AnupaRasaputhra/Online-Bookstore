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
			margin-top:100px;	
			}
			
		</style>
	</head>

		
<body >
	<a href="Admin_Home.php" style="color: white;"><center>Admin-Home</center></a>
<div class="content">
				<h2> <center>Admin Report</center> </h2>
				<table>
		<form name="admin2" method="post" action="category.php">
			<caption><b>CATEGORY</b></caption>
			<tr>
			<td><label>Category Id   :</label></td>
			<td><input type="text" name="id2"/><br/></td></tr>
			
			
			<tr>
			<td><label>Category Name :</label></td>
			<td><input type="text" name="name2"/><br/></td></tr>
			
			
			<tr><td colspan="4">
			<input type="submit"  value="Add" name="addcat" />
			<input type="submit" name="updatecat" value="Update" onclick="return confirm('continue update??')"/>
			<input type="submit" name="deletecat" value="Delete"onclick="return confirm('continue delete??')" /></tr>
			
			
		</form></table>
		<?php
	$f=mysql_query("SELECT * FROM admin.category");

?>
<table  border="1" style="border-style: solid; border-width: thin; table-layout:initial">
	<caption>CATEGORY</caption>
	<tr>
		<th>cat_id</th>
		<th>cat_name</th>
		
			
		</tr>
	<?php
	
	while($row=mysql_fetch_array($f)){
		
		echo "<tr>";
		echo "<td>".$row['cat_id']."</td>";
		echo "<td>".$row['cat_name']."</td>";
		
		
		echo "</tr>";
	}
		
	echo "</table>";
	echo "<br/>";	
	
	
	?>
	
	
	
</div>
</body>
</html>