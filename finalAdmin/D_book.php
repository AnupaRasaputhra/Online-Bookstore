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
		<form name="admin1" method="post" action="book.php">
			<caption><b>BOOKS</b></caption>
			<tr>
			<td><label>Book Id   :</label></td>
			<td><input type="text" name="id1"/><br/></td></tr>
			
			
			<tr>
			<td><label>Book Name :</label></td>
			<td><input type="text" name="name1"/><br/></td></tr>
			
			<tr>
			<td><label>Publisher :</label></td>
			<td><input type="text" name="publisher"/><br/></td></tr>
			
			<tr>
			<td><label>ISBN     :</label></td>
			<td><input type="text" name="isbn"/><br/></td></tr>
			
			<tr>
			<td><label>Price    :</label></td>
			<td><input type="text" name="price"/><br/></td></tr>

			<tr>
			<td><label>Category Id    :</label></td>
			<td><input type="text" name="cat_id"/><br/></td></tr>
			
			<tr>
			<td><label>Description    :</label></td>
			<td><input type="text" name="des_id"/><br/></td></tr>
			
			<tr>
			<td><label>Edition    :</label></td>
			<td><input type="text" name="edition"/><br/></td></tr>
			
			<tr>
			<td><label>Pages    :</label></td>
			<td><input type="text" name="page"/><br/></td></tr>
			
			
			<tr><td colspan="4">
			<input type="submit" name="addbk" value="Add" />
			<input type="submit" name="updatebk" value="Update" onclick="return confirm('continue update??')">
			<input type="submit" name="deletebk" value="Delete"  onclick="return confirm('continue delete??')"/></tr>
								
		</form></table>
		


<?php
	$f=mysql_query("SELECT * FROM admin.books");

?>
<table  border="1" style="border-style: solid; border-width: thin; " >
	<caption>BOOKS</caption>
	<tr>
		<th>book_id</th>
		<th>b_name</th>
		<th>Cat_id</th>
		<th>publisher</th>
		<th>Edition</th>
		<th>ISBN</th>
		<th>Pages</th>
		<th>price</th>
		<th>Image</th>
		
			
		</tr>
	<?php
	
	while($row=mysql_fetch_array($f)){
		
		echo "<tr>";
		echo "<td>".$row['b_id']."</td>";
		echo "<td>".$row['b_name']."</td>";
		echo "<td>".$row['b_cat']."</td>";
		echo "<td>".$row['b_publisher']."</td>";
		echo "<td>".$row['b_edition']."</td>";
		echo "<td>".$row['b_isbn']."</td>";
		echo "<td>".$row['b_page']."</td>";
		echo "<td>".$row['b_price']."</td>";
		echo "<td>".$row['b_img']."</td>";
		
		echo "</tr>";
	}
		
	echo "</table>";
	echo "<br/>";	
	
	
	?>
	</div>
	
	</body>
	</html>