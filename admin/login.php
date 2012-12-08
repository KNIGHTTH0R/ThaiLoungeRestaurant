
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css" />
</head>
	<body>
		<div id="credsPage">
			<h2>Thai Lounge Administrator Login</h2>
			<form action="checklogin.php" method="post">
				User Name: <input type="text" name="username" required="required" maxlength="50"><br>
				Password: <input type="password" name="password" required="required" maxlength="50"><br>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>
