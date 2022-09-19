<?php
session_start();

require 'db_connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Online BookStore - Products Page</title>

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
        </div> <!-- END of templatemo_header -->

        <div id="templatemo_menu">
            <div id="top_nav" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php" class="selected">Products</a>
                        <ul>
                            <li><a href="books.php">Books</a></li>
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
                    Shopping Cart : ( <a href="shoppingcart.php">Show Cart</a> )
                </div>
                <div id="templatemo_search">
                    <form action="#" method="get">
                        <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                        <input type="submit" name="Search" value=" Search " alt="Search" id="searchbutton" title="Search" class="sub_btn" />
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
                <h1>English Books</h1>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/1.jpg" alt="Image 01" /></a>
                    <h3>Lightning Theif</h3>
                    <p class="product_price">Rs:350</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="productdetail.html" class="detail">Detail</a>
                </div>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/2.jpg" alt="Image 02" /></a>
                    <h3>Twilight</h3>
                    <p class="product_price">Rs:350</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="productdetail.html" class="detail">Detail</a>
                </div>
                <div class="product_box no_margin_right">
                    <a href="productdetail.html"><img src="images/product/3.jpg" alt="Image 03" /></a>
                    <h3>The Giver</h3>
                    <p class="product_price">Rs:350</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="productdetail.html" class="detail">Detail</a>
                </div>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/4.jpg" alt="Image 04" /></a>
                    <h3>The Fault in Our Stars</h3>
                    <p class="product_price">Rs:350</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="productdetail.html" class="detail">Detail</a>
                </div>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/5.jpg" alt="Image 05" /></a>
                    <h3>Vampire Academy</h3>
                    <p class="product_price">Rs:350</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="productdetail.html" class="detail">Detail</a>
                </div>
                <div class="product_box no_margin_right">
                    <a href="productdetail.html"><img src="images/product/6.jpg" alt="Image 06" /></a>
                    <h3>Jane Eyer</h3>
                    <p class="product_price">Rs:350</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="productdetail.html" class="detail">Detail</a>
                </div>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/7.jpg" alt="Image 07" /></a>
                    <h3>The Jungle Book</h3>
                    <p class="product_price">Rs:230</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="productdetail.html" class="detail">Detail</a>
                </div>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/n2.jpg" alt="Image 08" /></a>
                    <h3>The Lord Of The Ring</h3>
                    <p class="product_price">Rs:220</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="productdetail.html" class="detail">Detail</a>
                </div>
                <div class="product_box no_margin_right">
                    <a href="productdetail.html"><img src="images/product/n5.jpg" alt="Image 09" /></a>
                    <h3>Sherlok Home</h3>
                    <p class="product_price">Rs:460</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="productdetail.html" class="detail">Detail</a>
                </div>
            </div>
            <div class="cleaner"> </div>
        </div> <!-- END of templatemo_main -->

        <div id="templatemo_footer">
            <p>
                <a href="index.html">Home</a> | <a href="products.html">Products</a> | <a href="about.html">About</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a>
            </p>

            Copyright © 2016 <a href="index.php">Online BookStore</a>
        </div> <!-- END of templatemo_footer -->

    </div> <!-- END of templatemo_wrapper -->

</body>

</html>