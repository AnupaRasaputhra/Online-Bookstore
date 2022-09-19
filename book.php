<?php
session_start();

$con_str = mysqli_connect("localhost", "root", "") or die("Can't Connect...");

mysqli_select_db($con_str, "admin") or die("Can't Connect to Database...");
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

		if ((($_POST["id1"] != null)) && (($_POST["name1"] != null)) && (($_POST["publisher"] != null)) && (($_POST["isbn"] != null)) && (($_POST["price"] != null)) && (($_POST["cat_id"] != null)) && (($_POST['des_id'] != null))) {

			if (isset($_POST["addbk"])) {
				$bk = $_POST['id1'];
				$name = $_POST['name1'];
				$publishers = $_POST['publisher'];
				$code = $_POST['isbn'];
				$price = $_POST['price'];
				$cat = $_POST['cat_id'];
				$des = $_POST['des_id'];
				$img = $_POST['image'];
				$page = $_POST['page'];
				$edition = $_POST['edition'];

				$q = "insert into admin.books values('$bk','$name','$cat','$des','$publishers','$edition','$code','$page','$price','$img')";
				$r = mysqli_query($con_str, $q) or die("Can't Execute Query...");
			} else if (isset($_POST["updatebk"])) {
				$bk = $_POST['id1'];
				$name = $_POST['name1'];
				$publishers = $_POST['publisher'];
				$code = $_POST['isbn'];
				$price = $_POST['price'];
				$cat = $_POST['cat_id'];
				$des = $_POST['des_id'];
				$img = "upload_image";
				$page = $_POST['page'];
				$edition = $_POST['edition'];

				$y = "UPDATE admin.books SET b_name='$name',b_cat='$cat',b_desc='$des' ,b_publisher='$publishers',b_edition='$edition',b_isbn='$code',b_page='$page',b_price='$price',b_img='$img' WHERE b_id='$bk'";

				if (!mysqli_query($con_str, $y)) {
					die("Can't Execute Query...");
				} else {
					echo "<center>1 record updated</center>";
				}
			} else if ($_POST["deletebk"]) {
				$bk = $_POST['id1'];
				$name = $_POST['name1'];
				$publishers = $_POST['publisher'];
				$code = $_POST['isbn'];
				$price = $_POST['price'];
				$cat = $_POST['cat_id'];
				$des = $_POST['des_id'];
				$img = "upload_image";
				$page = $_POST['page'];
				$edition = $_POST['edition'];

				$s = "DELETE FROM admin.books WHERE b_id='$bk'";

				if (!mysqli_query($con_str, $s)) {
					die("Can't Execute Query...");
				} else {
					echo "<center> 1 record deleted </center>";
				}
			}
		} else {
			echo "One or more fields are empty";
		}

		?>

		<a href="D_book.php">
			<center>OK</center>
		</a>

	</div>
</body>

</html>