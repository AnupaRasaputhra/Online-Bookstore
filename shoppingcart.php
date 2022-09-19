<?php session_start();
require 'db_connect.php';
require 'item.php';

if (isset($_GET['s'])) {
	$search = $_GET['s'];
} else {
	$search = null;
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Online BookStore - Shopping Cart</title>

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
					<li><a href="products.php" class="selected">Products</a>
						<ul>
							<li><a href="book.php">Books</a></li>
							<li><a href="stationery.php">Stationeries</a></li>
						</ul>
					</li>
					<li><a href="about.php">About</a></li>
					<li><a href="checkout.php">Checkout</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<br style="clear: left" />
			</div> <!-- end of ddsmoothmenu -->

			<div id="menu_second_bar">
				<div id="top_shopping_cart">
					Shopping Cart: <strong>3 Products</strong> ( <a href="shoppingcart.php">Show Cart</a> )
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
				<h1>Shopping Cart</h1>
				<?php

				if (isset($_GET['b'])) {

					$q = 'select * from books where b_id=' . $_GET['b'];
					$result = mysqli_query($con_str, $q);

					$product = mysqli_fetch_object($result);
					$item = new Item();
					$item->b_id = $product->b_id;
					$item->b_img = $product->b_img;
					$item->b_name = $product->b_name;
					$item->quantity = 1;
					$item->b_price = $product->b_price;

					//check product is existing in cart

					$index = -1;
					$cart = unserialize(serialize($_SESSION['cart']));
					for ($i = 0; $i < count($cart); $i++)
						if ($cart[$i]->b_id == $_GET['b']) {
							$index = $i;
							break;
						}
					if ($index == -1)
						$_SESSION['cart'][] = $item;
					else {
						$cart[$index]->quantity++;
						$_SESSION['cart'] = $cart;
					}
				}

				//Delete product in cart

				if (isset($_GET['index'])) {
					$cart = unserialize(serialize($_SESSION['cart']));
					//$itm = $cart[$_GET['index']];
					//if (($key = array_search($itm, $cart)) !== false) {
					//unset($cart[$key]);
					//}
					unset($cart[$_GET['index']]);
					$cart = array_values($cart);
					$_SESSION['cart'] = $cart;
				}

				?>
				<table width="680px" cellspacing="0" cellpadding="5">
					<tr bgcolor="#ddd">
						<th width="220" align="left">Image </th>
						<th width="180" align="left">Description </th>
						<th width="100" align="center">Quantity </th>
						<th width="60" align="right">Price </th>
						<th width="60" align="right">Total </th>
						<th width="90"> </th>
					</tr>

					<?php
					$cart = unserialize(serialize($_SESSION['cart']));
					$s = 0;
					$index = 0;
					for ($i = 0; $i < count($cart); $i++) {
						$s += $cart[$i]->b_price * $cart[$i]->quantity;

						echo "<tr>
                        	<td><a href='productdetail.php?b=" . $cart[$i]->b_id . "'><img src='" . $cart[$i]->b_img . "' ></a></td> 
                        	<td>" . $cart[$i]->b_name . "</td> 
                            <td align='center'><input type='text' value=" . $cart[$i]->quantity . " style='width: 20px; text-align: right' /> </td>
                            <td align='right'>" . $cart[$i]->b_price . "</td> 
                            <td align='right'>" . $cart[$i]->b_price * $cart[$i]->quantity . " </td>
                            <td align='center'> <a href='shoppingcart.php?index=" . $index . "' onclick=\"javascript: return confirm('Are you sure REMOVE item from cart...');\">Remove</a> </td>
						</tr>";

						//assigning cart array index to remove from card;
						$index += 1;
					}
					?>



					<?php
					$index++;
					?>

					<tr>
						<td>
							<h4>Total Amount :Rs.<?php echo $s; ?>.00 </h4>
						</td>
						<!--<td width="60" align="right">SUM </td> 
							<td><?php echo $s; ?></td>-->
					</tr>
				</table>
				<div style="float:right; width: 215px; margin-top: 20px;">

					<p><a href="checkout.php?total=<?php echo $s ?>">Proceed to checkout</a></p>

					<p><a href="products.php">Continue shopping</a></p>

				</div>

			</div>
			<div class="cleaner"></div>
		</div> <!-- END of templatemo_main -->
		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div id="templatemo_footer">
			<p>
				<a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="about.php">About</a> | <a href="faqs.php">FAQs</a> | <a href="checkout.php">Checkout</a> | <a href="contact.php">Contact</a>
			</p>

			Copyright © 2016 <a href="#">Your Company Name</a>
		</div> <!-- END of templatemo_footer -->

	</div> <!-- END of templatemo_wrapper -->

</body>

</html>