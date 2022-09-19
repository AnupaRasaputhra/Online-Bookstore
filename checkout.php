<?php session_start();

require 'db_connect.php';

?>
<!DOCTYPE html>
<html>

<head>
	<title>Online BookStore - Checkout Page</title>

	<script type="text/javascript">
		function formValidate() {
			var name = document.forms["checkout"]["fname"].value;
			var address = document.forms["checkout"]["address"].value;
			var city = document.forms["checkout"]["city"].value;
			var country = document.forms["checkout"]["country"].value;
			var email = document.forms["checkout"]["email"].value;
			var phone = document.forms["checkout"]["phone"].value;

			isAlphebatic1(name);
			isAlphebatic2(city);
			isAlphebatic3(country);
			isAlphaNumeric(address);
			emailValidation(email);
			isNumeric(phone);
		}

		function isEmpty(elemValue, field) {

			if (elemValue == "" || elemValue == null) {
				alert("You cannot have " + field + " field empty");
				return true;
			} else
				return false;
		}

		function isAlphebatic1(elemValue) {

			var exp = /^[a-z A-Z]+$/;
			if (!isEmpty(elemValue, "Name")) {
				if (elemValue.match(exp)) {
					return true;
				} else {
					alert("Enter only text for your Name");
					//return false;	
				}
			} else
				return false;

		}

		function isAlphebatic2(elemValue) {

			var exp = /^[a-z A-Z]+$/;
			if (!isEmpty(elemValue, "City")) {
				if (elemValue.match(exp)) {
					return true;
				} else {
					alert("Enter only text for your City Name");
					//return false;	
				}
			} else
				return false;

		}

		function isAlphebatic3(elemValue) {

			var exp = /^[a-z A-Z]+$/;
			if (!isEmpty(elemValue, "Country")) {
				if (elemValue.match(exp)) {
					return true;
				} else {
					alert("Enter only text for your Country Name");
					//return false;	
				}
			} else
				return false;

		}

		function isAlphaNumeric(elemValue) {
			var exp = /^[0-9a-zA-Z]+$/;
			if (!isEmpty(elemValue, "Address")) {
				if (elemValue.match(exp)) {
					return true;
				} else {
					alert("Enter only letters and numbers for the Address");
					//return false;
				}
			} else
				return false;
		}

		function isNumeric(elemValue) {


			if (!isEmpty(elemValue, "Phone")) {
				var exp = /^[0-9]+$/;
				if (elemValue.match(exp))
					return true;
				else {
					alert("Enter a valid Phone Number");
					return false;
				}
			} else
				return false;
		}


		function emailValidation(elemValue) {
			if (!isEmpty(elemValue, "Email")) {
				var atpos = elemValue.indexOf("@");
				var dotpos = elemValue.indexOf(".");

				if (atpos < 1 || dotpos + 2 >= elem.length || atpos + 2 > dotpos) {
					alert("Enter a valid email address");
					//return false;
				} else
					return true;
			} else
				return false;
		}
	</script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js">

	</script>

	<script language="javascript" type="text/javascript">
		function clearText(field) {
			if (field.defaultValue == field.value) field.value = '';
			else if (field.value == '') field.value = field.defaultValue;
		}
	</script>

	<script type="text/javascript">
		ddsmoothmenu.init({
			mainmenuid: "top_nav",
			orientation: 'h',
			classname: 'ddsmoothmenu',
			contentsource: "markup"
		})
	</script>

	<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>

</head>

<body>

	<div id="templatemo_wrapper">
		<div id="templatemo_header">

			<div id="site_title">
				<h1><a href="#">Station Shop</a></h1>
			</div>

			<div id="header_right">
				<?php
				if (isset($_SESSION['id'])) {
					echo '<a href="account.php">';
					echo "Welcome :  " . $_SESSION['id'] . "  <b>My Account</b>";
					echo "</a>";
					echo " | ";
					echo '<a href="shoppingcart.php">';
					echo "<b>My Cart</b>";
					echo "</a>";
					echo " | ";
					echo '<a href="checkout.php">';
					echo "<b>Checkout</b>";
					echo "</a>";
					echo " | ";
					echo '<a href="logout.php">';
					echo "<b>Log Out</b>";
					echo "</a>";
				} else {
					echo '<a href="account.php">';
					echo "<b>My Account</b>";
					echo "</a>";
					echo " | ";
					echo '<a href="shoppingcart.php">';
					echo "<b>My Cart</b>";
					echo "</a>";
					echo " | ";
					echo '<a href="checkout.php">';
					echo "<b>Checkout</b>";
					echo "</a>";
					echo " | ";
					echo '<a href="login.php">';
					echo "<b>Log In</b>";
					echo "</a>";
				}
				?>
			</div>

			<div class="cleaner"> </div>
		</div>

		<div id="templatemo_menu">
			<div id="top_nav" class="ddsmoothmenu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">Products</a>
						<ul>
							<li><a href="book.php">Books</a></li>
							<li><a href="stationery.php">Stationeries</a></li>
						</ul>
					</li>
					<li><a href="about.php">About</a></li>
					<li><a href="checkout.php" class="selected">Checkout</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<br style="clear: left" />
			</div>

			<div id="menu_second_bar">

				<div id="top_shopping_cart">
					Shopping Cart : ( <a href="shoppingcart.php">Show Cart</a> )
				</div>

				<div id="templatemo_search">
					<form action="products.php" method="GET">
						<input type="text" value="Search" name="s" id="s" title="Search" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
						<input type="submit" value="Search" alt="s" id="searchbutton" title="Search" class="sub_btn" />
					</form>
				</div>
				<div class="cleaner"> </div>
			</div>
		</div>

		<div id="templatemo_main">
			<div id="sidebar" class="float_l">
				<div class="sidebar_box"><span class="bottom"> </span>

					<h3>Categories</h3>

					<div class="content">
						<ul class="sidebar_list">

							<li class="first"><a href="products.php">New Arrivals</a></li><br />
							<li><a href="sinhala.php">Sinhala</a></li><br />
							<li><a href="English.php">English</a></li><br />
							<li><a href="#">Adult's</a></li><br />
							<li><a href="children.php">Children's</a></li><br />
							<li><a href="novel.php">Novels</a></li><br />

						</ul>
					</div>

				</div>
				<div class="sidebar_box"><span class="bottom"> </span>

					<h3>Best Sellers </h3>

					<div class="content">

						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 01" /></a>
							<h4><a href="#">Rathna Publishers</a></h4>

							<div class="cleaner"> </div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_02.jpg" alt="Image 02" /></a>
							<h4><a href="#">Gunasena Books</a></h4>

							<div class="cleaner"> </div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_03.jpg" alt="Image 03" /></a>
							<h4><a href="#">Godage Books</a></h4>

							<div class="cleaner"> </div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_04.jpg" alt="Image 04" /></a>
							<h4><a href="#">Samudra Bookshop</a></h4>

							<div class="cleaner"> </div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_05.jpg" alt="Image 05" /></a>
							<h4><a href="#">Wasana Bookshop</a></h4>

							<div class="cleaner"> </div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_06.jpg" alt="Image 06" /></a>
							<h4><a href="#">LakeHouse Bookshop</a></h4>

							<div class="cleaner"> </div>
						</div>

					</div>
				</div>
			</div>

			<form name="checkout" method="post" onsubmit="return formValidate()" action="check.php">

				<div id="content" class="float_r">

					<h2>Checkout</h2>
					<h5><strong>BILLING DETAILS</strong></h5>

					<div class="content_half float_l checkout">
						Enter your full name as it is on the credit card:
						<input type="text" name="fname" style="width:300px;" />
						Address:
						<input type="text" name="address" style="width:300px;" />
						City:
						<input type="text" name="city" style="width:300px;" />
						Country:
						<input type="text" name="country" style="width:300px;" />
					</div>

					<div class="content_half float_r checkout">
						Email:
						<input type="email" name="email" style="width:300px;" />
						Phone:<br />
						<span style="font-size:12px">Please, specify your reachable phone number. YOU MAY BE GIVEN A CALL TO VERIFY AND COMPLETE THE ORDER.</span>
						<input type="text" name="phone" style="width:300px;" />
					</div>

					<div class="cleaner h50"> </div>
					<td>
						<center><input type="submit" name="submit" value="SUBMIT"></center>
					</td>

					<h3>Shopping Cart</h3>
					<?php
					$_SESSION['total'] = $_GET['total'];
					$totalamount = $_GET['total'];
					//$x="INSERT INTO admin.checkout (total)
					//VALUES('$totalamount')";
					//$q=mysql_query($x);
					?>

					<h4>TOTAL: <strong><?php echo $totalamount ?>.00</strong></h4>

					<div class="cleaner"> </div>
				</div>
			</form>

		</div>

</body>

</html>