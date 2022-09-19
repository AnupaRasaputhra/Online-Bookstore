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

		if (($_POST['id4'] != null) && ($_POST['name4'] != null) && ($_POST['email4'] != null) && ($_POST['query'] != null)) {

			if (isset($_POST["addc"])) {
				$cid = $_POST['id4'];
				$cname = $_POST['name4'];
				$cemail = $_POST['email4'];
				$query = $_POST['query'];

				$q = "INSERT INTO admin.contacts VALUES('$cid','$cname','$cemail','$query')";
				$r = mysqli_query($con_str, $q) or die("Can't Execute Query...");
			} else if (isset($_POST["updatec"])) {
				$cid = $_POST['id4'];
				$cname = $_POST['name4'];
				$cemail = $_POST['email4'];
				$query = $_POST['query'];
				$y = "UPDATE admin.contacts SET con_name='$cname',con_email='$cemail',con_query='$query' WHERE con_id='$cid'";

				if (!mysqli_query($con_str, $y)) {
					die("Can't Execute Query...");
				} else {
					echo "<center>1 record updated</center>";
				}
			} elseif ($_POST["deletec"]) {
				$cid = $_POST['id4'];
				$cname = $_POST['name4'];
				$cemail = $_POST['email4'];
				$query = $_POST['query'];

				$s = "DELETE FROM admin.contacts WHERE con_id='$cid'";

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
		<a href="D_contact.php">
			<center>OK</center>
		</a>
	</div>
</body>

</html>