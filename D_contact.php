<?php
include "db_connect.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>Admin</title>

	<style>
		body {
			background-image: url("images/templatemo_body.jpg");
		}

		.content {

			border-radius: 5px;
			background-color: #e6e6e6;
			padding: 50px 50px 50px;
			border: 2px;
			width: 800px;
			margin-left: 200px;
			margin-top: 100px;
		}
	</style>
</head>


<body>
	<a href="Admin_Home.php" style="color: white;">
		<center>Admin-Home</center>
	</a>
	<div class="content">
		<h2>
			<center>Admin Report</center>
		</h2>
		<table>
			<form name="admin4" method="post" action="contacts.php">
				<caption><b>CONTACTS</b></caption>
				<tr>
					<td><label>Contact Id :</label></td>
					<td><input type="text" name="id4" /><br /></td>
				</tr>


				<tr>
					<td><label>Contact Name :</label></td>
					<td><input type="text" name="name4" /><br /></td>
				</tr>

				<tr>
					<td><label>E mail :</label></td>
					<td><input type="email" name="email4" /><br /></td>
				</tr>

				<tr>
					<td><label>Contact-Query :</label></td>
					<td><input type="text" name="query" /></td>
				</tr><br />


				<tr>
					<td colspan="4">
						<input type="submit" name="addc" value="Add" />
						<input type="submit" name="updatec" value="Update" onclick="return confirm('continue update??')" />
						<input type="submit" name="deletec" value="Delete" onclick="return confirm('continue delete??')" />
				</tr>

			</form>
		</table>
		<?php
		$f = mysqli_query($con_str, "SELECT * FROM admin.contacts");

		?>
		<table border="1" style="border-style: solid; border-width: thin; table-layout:initial">
			<caption>CONTACTS</caption>
			<tr>
				<th>contact_id</th>
				<th>contact_name</th>
				<th>email</th>
				<th>Query</th>


			</tr>
			<?php

			while ($row = mysqli_fetch_array($f)) {

				echo "<tr>";
				echo "<td>" . $row['con_id'] . "</td>";
				echo "<td>" . $row['con_name'] . "</td>";
				echo "<td>" . $row['con_email'] . "</td>";
				echo "<td>" . $row['con_query'] . "</td>";


				echo "</tr>";
			}

			echo "</table>";
			echo "<br/>";


			?>
	</div>

</body>

</html>