<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Register </title>

	<style>		
		table{
			border-radius:5px;
			background-color:#e6e6e6;
			padding: 50px 50px 50px 50px;
			border: 2px;			
		}
		body{
			background-image:url("images/templatemo_body.jpg");
		}
		input[type=text],select{
			width:255px;
			padding:5px 5px;
			margin:8px;
			border-radius: 5px;
			border: 2px #FFD7OO ;
		}
		input[type=password],select{
			width:255px;
			padding:5px 5px;
			margin:8px;
			border-radius: 5px;
			border: 2px #FFD7OO ;
		}
		input[type=email],select{
			width:255px;
			padding:5px 5px;
			margin:8px;
			border-radius: 5px;
			border: 2px #FFD7OO ;
		}
		input[type=submit]{
			width:270px;
			padding:12px 20px;
			margin:8px;
			border-radius: 5px;
			background-color: #6495ED;
			border: 2px gold ;
		}
		caption{
			padding:20px;
		}
		#templatemo_footer {
			width: 920px;
			text-align: center;	
			padding: 9px 19px;
			background: #121212;
			border: 1px solid #3a3a3a;
			margin: 8px 180px 8px;
		}
		
	</style>
	</head>
	
	<body>
		<form name="loginForm2" method="post" action="registerMN.php">
			<table align="center" >
				<caption><img src="images/templatemo_logo.png" width="180" height="30"/></caption>
				<tr>
					<td><b><h2> Create account </h2></b></td>
				</tr>
				<tr>
					<td><b> Your name </b></td>
				</tr>	
				<tr>
					<td> <input type="text" name="name"> </td>
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
					<td> <input type="password" name="password"  placeholder="(at least 6 charactors)"> </td>
				</tr>
				<tr>
					<td><b> Password again</b></td>
				</tr>
				<tr>
					<td> <input type="password" name="passwordAgain"  placeholder="re-enter your password"> </td>
				</tr>
				<tr>
					<td> <input type="submit" value="Create your account" name="register"> </td>
				</tr>
				<tr>
					<td><hr></hr><p align="center">Already have an account?<a href="login.php" > Sign in </a></p><hr></hr></td>
				</tr>
			</table>
		</form>
		
		<div id="templatemo_footer">
    		<p>
				<a href="index.php">Home</a> | <a href="products.php">Products</a> | <a href="about.php">About</a> | <a href="checkout.php">Checkout</a> | <a href="contact.php">Contact</a>
			</p>

    		Copyright © 2048 <a href="#">Online BookStore</a>
    	</div> <!-- END of templatemo_footer -->
		
	</body>
</html>