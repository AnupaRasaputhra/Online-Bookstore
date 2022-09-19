<?php
session_start();

require 'db_connect.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Online BookStore - Contact</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

	<script language="javascript" type="text/javascript">
		function clearText(field) {
			if (field.defaultValue == field.value) field.value = '';
			else if (field.value == '') field.value = field.defaultValue;
		}
	</script>

	<script type="text/javascript">
		ddsmoothmenu.init({
			mainmenuid: "top_nav", //menu DIV id
			orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
			classname: 'ddsmoothmenu', //class added to menu's outer DIV
			//customtheme: ["#1c5a80", "#18374a"],
			contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
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
		</div> <!-- END of templatemo_header -->

		<div id="templatemo_menu">
			<div id="top_nav" class="ddsmoothmenu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">Products</a>
						<ul>
							<li><a href="books.php">Books</a></li>
							<li><a href="stationery.php">Stationeries</a></li>
						</ul>
					</li>
					<li><a href="about.php">About</a></li>
					<li><a href="checkout.php">Checkout</a></li>
					<li><a href="contact.php" class="selected">Contact</a></li>
				</ul>
				<br style="clear: left" />
			</div> <!-- end of ddsmoothmenu -->
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
		</div> <!-- END of templatemo_menu -->

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
			<div id="content" class="float_r">

				<h1>Contact Us</h1>
				<div class="content_half float_l">
					<h4>Send us a message...</h4>
					<div id="contact_form">
						<form method="post" name="contact" action="contactsD.php">

							<label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
							<div class="cleaner h10"> </div>
							<label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
							<div class="cleaner h10"> </div>

							<label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />

							<div class="cleaner h10"> </div>

							<label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"> </textarea>
							<div class="cleaner h10"> </div>

							<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
							<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />

						</form>
					</div>
				</div>
				<div class="content_half float_r">
					<h4>Mailing Addresses</h4>
					<h6><strong>Location One</strong></h6>
					<br />

					<strong>Phone:</strong> 090-090-1080<br />
					<strong>Email:</strong> <a href="#"> </a><br />

					<div class="cleaner h20"> </div>
					<h6><strong>Location Two</strong></h6>
					<br />

					<strong>Phone:</strong> 020-050-1920<br />
					<strong>Email:</strong> <a href="#"> </a><br />
				</div>

				<div class="cleaner h40"> </div>

				<iframe width="680" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/place/SLIIT+Matara+Center/@5.9506357,80.5414045,15z/data=!4m12!1m6!3m5!1s0x0:0xb61d2dbf9146d81!2sSLIIT+Matara+Center!8m2!3d5.9491418!4d80.5465114!3m4!1s0x0:0xb61d2dbf9146d81!8m2!3d5.9491418!4d80.5465114"> </iframe>

			</div>
			<div class="cleaner"> </div>
		</div> <!-- END of templatemo_main -->

		<div id="templatemo_footer">
			<p>
				<a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="about.php">About</a> | <a href="checkout.php">Checkout</a> | <a href="contact.php">Contact</a>
			</p>

			Copyright © 2016 <a href="index.php">Online BookStore</a> <!-- Credit: www.templatemo.com -->
		</div> <!-- END of templatemo_footer -->

	</div> <!-- END of templatemo_wrapper -->

</body>

</html>