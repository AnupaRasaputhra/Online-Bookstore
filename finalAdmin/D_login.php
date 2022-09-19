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
<div class="content" >
	
				<h2> <center>Admin Report</center> </h2>
				<div><table >
		<form name="admin3" method="post" action="user.php">
			<caption><b>USER</b></caption>
			
			
			<tr>
			<td><label>User Name :</label></td>
			<td><input type="text" name="name3"/><br/></td></tr>
			
			
			
			<tr>
			<td><label>E mail     :</label></td>
			<td><input type="email" name="email3"/><br/></td></tr>
			
			<tr>
			<td><label>Password     :</label></td>
			<td><input type="password" name="password"/><br/></td></tr>
						
			
			
			<tr><td colspan="4">
			<input type="submit" name="addus" value="Add" />
			<input type="submit" name="updateus" value="Update" onclick="return confirm('continue update??')"/>
			<input type="submit" name="deleteus" value="Delete" onclick="return confirm('continue delete??')"/></tr>
			
					
		</form></table>
		
<div class="one" >
		<?php
	$f=mysql_query("SELECT * FROM admin.login");

?>
<table border="1" style="border-style: solid; border-width: thin; table-layout:initial">
<caption>USERS</caption>
	<tr>
		<th>user_name</th>
		<th>email</th>
		<th>password</th>
		
					
		</tr>
	<?php
	
	while($row=mysql_fetch_array($f)){
		
		echo "<tr>";
		
		echo "<td>".$row['user_name']."</td>";
		echo "<td>".$row['user_email']."</td>";
		echo "<td>".$row['user_password']."</td>";
		
		;
		echo "</tr>";
	}
		
	echo "</table>";
	echo "<br/>";	
	
	
	?>
	
</div>
</div>
</body>
</html>