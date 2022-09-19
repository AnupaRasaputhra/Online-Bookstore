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
			width: 200px;
			margin-left: 520px;
			margin-top: 100px;
		}
	</style>
</head>

<body>
	<div class="content">
		<h2>
			<center>Admin Report</center>
		</h2>

		<?php

		if (($_POST['id2'] != null) && ($_POST['name2'] != null)) {

			if (isset($_POST["addcat"])) {

				$cat_id = $_POST['id2'];
				$cat_nm = $_POST['name2'];
				$q = "INSERT INTO admin.category VALUES('$cat_id','$cat_nm')";
				$r = mysqli_query($con_str, $q);

			} else if (isset($_POST["updatecat"])) {
				$cat_id = $_POST['id2'];
				$cat_nm = $_POST['name2'];
				$y = "UPDATE admin.category SET cat_name='$cat_nm' where cat_id='$cat_id'";

				if (!mysqli_query($con_str, $y)) {
					die("Can't Execute Query...");
				} else {
					echo "<center>1 record updated</center>";
				}
			} elseif ($_POST["deletecat"]) {
				$cat_id = $_POST['id2'];
				$cat_nm = $_POST['name2'];
				$s = "DELETE FROM admin.category WHERE cat_id='$cat_id'";

				if (!mysqli_query($con_str, $s)) {
					die("Can't Execute Query...");
				} else {
					echo "<center>1 record deleted</center>";
				}
			}
		} else {
			echo "one or more fields are empty";
		}



		?>
		<a href="D_cat.php">
			<center>OK</center>
		</a>
	</div>
</body>

</html>