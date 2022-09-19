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

		<?php
		$f = mysqli_query($con_str, "SELECT * FROM admin.checkout");

		?>
		<table border="1" style="border-style: solid; border-width: thin; table-layout:initial">
			<caption>CHECKOUT</caption>
			<tr>
				<th>user_name</th>
				<th>address</th>
				<th>city</th>
				<th>country</th>
				<th>email</th>
				<th>phone</th>


			</tr>
			<?php

			if ($f === FALSE) {
				die("Can't Execute Query...");
			}
			while ($row = mysqli_fetch_array($f)) {

				echo "<tr>";
				echo "<td>" . $row['f_name'] . "</td>";
				echo "<td>" . $row['address'] . "</td>";
				echo "<td>" . $row['city'] . "</td>";
				echo "<td>" . $row['country'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['phone'] . "</td>";


				echo "</tr>";
			}

			echo "</table>";
			echo "<br/>";


			?>



	</div>
</body>

</html>