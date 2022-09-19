<?php session_start();

require 'db_connect.php';

if (isset($_GET['s'])) {
	$search = $_GET['s'];
} else {
	$search = null;
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Online BookStore</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="css/templatemo_style.css" />
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
	<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

	<!-- code for the slide -->
	<script type="text/javascript">
		$(document).ready(function() {
			$(".carousel").dualSlider({
				auto: true,
				autoDelay: 6000,
				easingCarousel: "swing",
				easingDetails: "easeOutBack",
				durationCarousel: 1000,
				durationDetails: 600
			});
		});
	</script>
</head>

<body>
	<div id="templatemo_wrapper">
		<!-- BEGIN of "templatemo_header" -->
		<div id="templatemo_header">
			<div id="site_title">
				<h1><a href="#"><?php echo "Station Shop" ?></a></h1>
			</div>

			<div id="header_right">
				<!-- top navigation bar -->
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
			<div class="cleaner"></div>
		</div>
		<!-- END of "templatemo_header" -->

		<!-- BEGIN of "templatemo_menu" -->
		<div id="templatemo_menu">
			<div id="top_nav" class="ddsmoothmenu">
				<!-- Navigation Link-->
				<ul>
					<li>
						<a href="index.php" class="selected">Home</a>
					</li>
					<li>
						<a href="products.php">Products</a>
						<ul>
							<li>
								<a href="books.php">Books</a>
							</li>
							<li>
								<a href="stationery.php">Stationeries</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="checkout.php">Checkout</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
				<!-- Navigation Link-->
				<br style="clear: left" />
			</div>
			<!-- end of ddsmoothmenu -->

			<div id="menu_second_bar">
				<!--shopping Cart-->
				<div id="top_shopping_cart">
					Shopping Cart : ( <a href="shoppingcart.php">Show Cart</a> )
				</div>

				<div id="templatemo_search">
					<form action="index.php" method="GET">
						<input type="text" value="Search" name="s" id="s" title="Search" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
						<input type="submit" value="Search" alt="s" id="searchbutton" title="Search" class="sub_btn" />
					</form>
				</div>

				<div class="cleaner"></div>
			</div>
		</div>
		<!-- END of templatemo_menu -->

		<div id="templatemo_middle" class="carousel">
			<!-- description  in right hand side to the sliding images-->
			<div class="panel">
				<div class="details_wrapper">
					<div class="details">

						<div class="detail">
							<h2 align="center"><a href="books.php">Book Shop</a></h2>
							<h3 align="center"><strong>
									<br />
									<h3 class="red">GET 15%</h3>Discount for
									<br />
									<br />
									best-selling books
								</strong></h3>
						</div>

						<div class="detail">
							<h2 align="center"><a href="stationery.php">Stationery Shop</a></h2>
							<h3 align="center"><strong>
									<br />
									Prep Up
									<br />
									<br />
									for Summer Vacations
									<br />
									<br />
									get upto 40% off
									<br />
									<br />
									<h3 class="red"> Discount !!!</h3>
								</strong></h3>
						</div>

						<div class="detail">
							<h2 align="center"><a href="#">How To Buy</a></h2>
							<h5 align="center" style="color: SlateGray  ;"><strong>
									login / create an account
									<br />
									<p style="color: maroon;">-----></p>Add to cart
									<br />
									<p style="color: maroon;">-----></p>checkouts
									<br />
									<p style="color: maroon;">-----></p>paypal
								</strong></h5>
						</div>

					</div>
				</div>

				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous">Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->

				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>

			</div><!-- /panel -->

			<div class="backgrounds">

				<div class="item item_1">
					<img src="images/slider/01.jpg" alt="Slider 01" />
				</div><!-- /item -->

				<div class="item item_2">
					<img src="images/slider/02.jpg" alt="Slider 02" />
				</div><!-- /item -->

				<div class="item item_3">
					<img src="images/slider/03.jpg" alt="Slider 03" />
				</div><!-- /item -->

			</div><!-- /backgrounds -->
		</div>
		<!-- END of templatemo_middle -->

		<div id="templatemo_main">
			<div id="sidebar" class="float_l">
				<div class="sidebar_box">
					<span class="bottom"> </span>

					<h3>Categories</h3>

					<div class="content">
						<ul class="sidebar_list">
							<li class="first">
								<a href="products.php">New Arrivals</a>
							</li>
							<br />
							<li>
								<a href="sinhala.php">Sinhala</a>
							</li>
							<br />
							<li>
								<a href="English.php">English</a>
							</li>
							<br />
							<li>
								<a href="#">Adult's</a>
							</li>
							<br />
							<li>
								<a href="children.php">Children's</a>
							</li>
							<br />
							<li>
								<a href="novel.php">Novels</a>
							</li>
							<br />
						</ul>
					</div>
				</div>

				<div class="sidebar_box">
					<span class="bottom"> </span>

					<h3>Best Sellers </h3>

					<div class="content">
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 01" /></a>
							<h4><a href="#">Rathna Publishers</a></h4>

							<div class="cleaner"></div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_02.jpg" alt="Image 02" /></a>
							<h4><a href="#">Gunasena Books</a></h4>

							<div class="cleaner"></div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_03.jpg" alt="Image 03" /></a>
							<h4><a href="#">Godage Books</a></h4>

							<div class="cleaner"></div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_04.jpg" alt="Image 04" /></a>
							<h4><a href="#">Samudra Bookshop</a></h4>

							<div class="cleaner"></div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_05.jpg" alt="Image 05" /></a>
							<h4><a href="#">Wasana Bookshop</a></h4>

							<div class="cleaner"></div>
						</div>
						<div class="bs_box">
							<a href="#"><img src="images/templatemo_image_06.jpg" alt="Image 06" /></a>
							<h4><a href="#">LakeHouse Bookshop</a></h4>

							<div class="cleaner"></div>
						</div>
					</div>

				</div>

			</div>

			<div id="content" class="float_r">

				<h1>Books</h1>

				<?php

				if ($search) {
					$query = "select * from books where b_name like '%$search%' LIMIT 0,9";
				} else {
					$query = "select * from books LIMIT 0,9";
				}

				$res = mysqli_query($con_str, $query) or die("Can't Execute Query...");

				$count = 0;
				while ($row = mysqli_fetch_assoc($res)) {
					if ($count == 2) {
						$count = 0;
						echo "<div class='product_box no_margin_right'>
										<a href='productdetail.php?b=" . $row['b_id'] . "'><img src='" . $row['b_img'] . "' alt='Image 01' /></a>
										<h3>" . $row['b_name'] . "</h3>
										<p class='product_price'>Rs." . $row['b_price'] . "</p>
										<a href='shoppingcart.php?b=" . $row['b_id'] . "' class='add_to_card'>Add to Cart</a>
										<a href='productdetail.php?b=" . $row['b_id'] . "' class='detail'>Detail</a>
								 	  </div>";
					} else {
						echo "<div class='product_box'>
										<a href='productdetail.php?b=" . $row['b_id'] . "'><img src='" . $row['b_img'] . "' alt='Image 01' /></a>
										<h3>" . $row['b_name'] . "</h3>
										<p class='product_price'>Rs." . $row['b_price'] . "</p>
										<a href='shoppingcart.php?b=" . $row['b_id'] . "' class='add_to_card'>Add to Cart</a>
										<a href='productdetail.php?b=" . $row['b_id'] . "' class='detail'>Detail</a>
								 	  </div>";
					}
					$count++;
				}
				?>

			</div>
			<div class="cleaner"></div>
		</div>
		<!-- END of templatemo_main -->

		<div id="templatemo_footer">
			<p>
				<a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="about.php">About</a> | <a href="checkout.php">Checkout</a> | <a href="contact.php">Contact</a> | <a href="Admin_login.php"><input type="button" value="Admin" name="adminView"></a>
			</p>

			Copyright © 2016 <a href="index.php">Online BookStore</a>
		</div>
		<!-- END of templatemo_footer -->

	</div>
	<!-- END of templatemo_wrapper -->

</body>

</html>