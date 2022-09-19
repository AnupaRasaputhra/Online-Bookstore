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
			<center>Admin Report </center>
		</h2>

		<?php

		if (($_POST['name3'] != null) &&  ($_POST['email3'] != null) && ($_POST['password'] != null)) {


			if (isset($_POST["addus"])) {
				$uname = $_POST['name3'];

				$uemail = $_POST['email3'];
				$ups = $_POST['password'];

				$q = "INSERT INTO admin.login VALUES('$uname','$uemail','$ups')";
				$r = mysqli_query($con_str, $q);
			} else if (isset($_POST["updateus"])) {
				$uname = $_POST['name3'];

				$uemail = $_POST['email3'];
				$ups = $_POST['password'];


				$y = "UPDATE admin.login SET user_name='$uname',user_password='$ups' WHERE user_email='$uemail'";

				if (!mysqli_query($con_str, $y)) {
					die("Can't Execute Query...");
				} else {
					echo "<center>1 record updated</center>";
				}
			} elseif ($_POST["deleteus"]) {
				$uname = $_POST['name3'];

				$uemail = $_POST['email3'];
				$ups = $_POST['password'];


				$s = "DELETE FROM admin.login WHERE user_email='$uemail'";

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
		<a href="D_login.php">
			<center>OK</center>
		</a>
	</div>
</body>

</html>