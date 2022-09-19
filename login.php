<!DOCTYPE html>
<html lang="en">

<head>
	<title> LogIn </title>

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

		/* #templatemo_footer {
			width: 920px;
			text-align: center;
			padding: 9px 19px;
			background: #121212;
			border: 1px solid #3a3a3a;
			margin: 8px 180px 8px;
		} */

		a {
			text-decoration: none;
		}
	</style>
</head>

<body>
	<form name="loginForm1" method="post" action="loginMN.php">
		<table align="center">
			<caption><img src="images/templatemo_logo.png" width="180" height="30" /></caption>
			<tr>
				<td><b>
					<h2> Sign in </h2>
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
				<td> <input type="password" type="secret" placeholder="enter password here" name="password"> </td>
			</tr>
			<tr>
				<td> <input type="submit" value="Sign in" name="login"> </td>
			</tr>
			<tr>
				<td>
					<p align="center">--------New to Station Shop?--------</p>
				</td>
			</tr>
			<tr>
				<td><a href="register.php"><input type="button" value="Create your account here"></a></td>
			</tr>
		</table>
	</form>

</body>

</html>