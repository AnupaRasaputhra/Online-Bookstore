 <?php
	session_start();

	require 'db_connect.php';
?>
 <!DOCTYPE html>
 <html>

 <head>
 	<!--<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />-->
 	<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

 	<style>
 		.content1 {
 			width: 800px;
 			background: #f0f0f0;
 			border: 1px solid #fff;
 			padding: 14px 15px 110px;

 		}

 		body {
 			background-image: url("images/templatemo_body.jpg");

 		}

 		.content {
 			border-radius: 5px;
 			background-color: #e6e6e6;
 			padding: 50px 50px 50px;
 			border: 2px;
 			width: 600px;
 			margin-left: 320px;
 			margin-top: 100px;
 		}
 	</style>
 </head>

 <body>
 	<div class="content">

 		<?php
			if (($_POST["fname"] != null) && ($_POST["address"] != null) && ($_POST["city"] != null) && ($_POST["country"] != null) &&
				($_POST["email"] != null) && ($_POST["phone"]) != null
			) {
				if (isset($_POST["submit"])) {
					$fname = $_POST["fname"];
					$address = $_POST["address"];
					$city = $_POST["city"];
					$country = $_POST["country"];
					$email = $_POST["email"];
					$phone = $_POST["phone"];
					$total = $_SESSION['total'];


					$insertString = "INSERT INTO admin.checkout VALUES('$fname','$address','$city','$country','$email','$phone','$total')";
					$r = mysqli_query($con_str, $insertString);

					echo "<h2>Successfully Data Added</h2>";
					echo '<div id="content" class="float_r">
				
				<table style="border:1px solid #CCCCCC; margin-left:1px; " width="100%" >
                <tr>
                    <td height="80px"> <img src="images/paypal.gif" alt="paypal" /></td>
                    <td width="400px;" style="padding: 0px 20px;">Recommended if you have a PayPal account. Fastest delivery time.
                    </td>
                     <td><a href="paypal.php" class="more">PAYPAL</a></td>                   
                </tr>
         </table>
         </div>';
				}
			} else {
				$error = "One or more fields are not filled... ";
				echo $error;
				echo "<p><a href=javascript:history.back()>Back To Checkout</a></p>  ";
			}
			?>
 	</div>
 </body>

 </html>