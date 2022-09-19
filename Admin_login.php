<!DOCTYPE html>
<html lang="en">

<head>
	<title> Admin - LogIn </title>

	<style>
		table {
			border-radius: 5px;
			background-color: #e6e6e6;
			padding: 50px 50px 50px;
			border: 2px;
		}

		body {
			background-image: url("images/templatemo_body.jpg");
		}

		input[type=text],
		select {
			width: 255px;
			padding: 10px 10px;
			margin: 8px;
			border-radius: 5px;
			border: 2px #FFD7OO;
		}

		input[type=password],
		select {
			width: 255px;
			padding: 10px 10px;
			margin: 8px;
			border-radius: 5px;
			border: 2px #FFD7OO;
		}

		input[type=email],
		select {
			width: 255px;
			padding: 10px 10px;
			margin: 8px;
			border-radius: 5px;
			border: 2px #FFD7OO;
		}

		input[type=submit] {
			width: 280px;
			padding: 12px 20px;
			margin: 8px;
			border-radius: 5px;
			background-color: #4881ea;
			border: 2px #FFD7OO;
		}

		input[type=button] {
			width: 280px;
			padding: 12px 20px;
			margin: 8px;
			border-radius: 5px;
			background-color: #ff981a;
			border: 2px #FFD7OO;
		}

		caption {
			padding: 20px;
		}

		#templatemo_footer {
			width: 920px;
			text-align: center;
			padding: 9px 19px;
			background: #121212;
			border: 1px solid #3a3a3a;
			margin: 8px 180px 8px;
		}

		a {
			text-decoration: none;
		}
	</style>
</head>

<body>
	<form name="loginForm2" method="post" action="loginAdmin.php">
		<table align="center">
			<caption><img src="images/templatemo_logo.png" width="180" height="30" /></caption>
			<tr>
				<td><b>
						<h2> Admin -Login </h2>
					</b></td>
			</tr>
			<tr>
				<td><b> Email </b></td>
			</tr>
			<tr>
				<td> <input type="email" name="email"> </td>
			</tr>
			<tr>
				<td><b> Password </b></td>
			</tr>
			<tr>
				<td> <input type="password" type="secret" placeholder="enter your password here" name="password"> </td>
			</tr>
			<tr>
				<td> <input type="submit" value="Sign in" name="login"> </td>
			</tr>
			<tr>
				<td>
					<p align="center">--------You are an Admin !!!--------</p>
				</td>
			</tr>
		</table>
	</form>

	<div id="templatemo_footer">
		<p>
			<a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="about.php">About</a> | <a href="checkout.php">Checkout</a> | <a href="contact.php">Contact</a>
		</p>

		Copyright © 2016 <a href="#">Online BookStore</a>
	</div> <!-- END of templatemo_footer -->

</body>

</html>