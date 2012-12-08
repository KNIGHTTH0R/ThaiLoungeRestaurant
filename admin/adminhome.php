
<?php
	session_start();
    require_once('database.php');
	
	if(!isset($_SESSION['thaiAdmin']) || $_SESSION['thaiAdmin'] == 'false')
	{
		header("location:login.php");
	}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin.css" />
</head>
<body>
	Login Successful<br><br>
	
	<ul>
		<li><a href="viewtakeout.php">View Take Out Orders</a></li>
		<li><a href="viewreservations.php">View Reservations</a></li>
		<li><a href="contact.asp">View Black Listed Customers</a></li>
	</ul>
	
	<br><br>
	
	<form action="logout.php" method="post">
		<input type="submit" value="Good Bye">
	</form>
</body>
</html>