<?php session_start();

require 'db_connect.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>Online BookStore - About Us</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddsmoothmenu.js"></script>

	<script language="javascript" type="text/javascript">
		function clearText(field) {
			if (field.defaultValue == field.value)
				field.value = '';
			else if (field.value == '')
				field.value = field.defaultValue;
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
				<h1><a href="#"><?php echo "Station Shop" ?></a></h1>
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
							<li><a href="books.php">Books</a></li>
							<li><a href="stationery.php">Stationeries</a></li>
						</ul>
					</li>
					<li><a href="about.php" class="selected">About</a></li>
					<li><a href="checkout.php">Checkout</a></li>
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

			<div id="content" class="float_l">

				<h1>About Us</h1>

				<h2>our online shop ??</h2>

				<p>Bridging the gap between the buyer and the seller and making knowledge more affordable and accessible is
					the purpose of The Book ShopBooks Marketplace. We are here to help you get the largest selection of books,
					at the best prices, in the easiest way possible, to your doorstep. We bring you books in all Sri Lankan
					languages and from Sri Lankan as well as foreign publishers. We have more sellers for the same book, which gives
					you the most competitive prices without the hassle of having to go to a bookstore. And finally,
					The Book Shop has made accessibility very high by removing physical limitations so that buyers can access
					this database from anywhere at their own convenience. Often the hassle to go to a bookstore restricts us from buying books.
					The Book Shop is here to solve this problem and create a revolution in the domain of Sr Lankan Internet users.</p>
				<div class="cleaner h20"> </div>

			</div>
			<div class="cleaner"> </div>
		</div>

		<div id="templatemo_footer">
			<p>
				<a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="about.php">About</a> | <a href="checkout.php">Checkout</a> | <a href="contact.php">Contact</a>
			</p>

			Copyright © 2016 <a href="index.php">Online BookStore</a>
		</div>

	</div>

</body>

</html>