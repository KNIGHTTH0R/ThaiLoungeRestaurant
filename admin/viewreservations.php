<?php
	session_start();
    require_once('database.php');
	
	if(!isset($_SESSION['thaiAdmin']) || $_SESSION['thaiAdmin'] == 'false')
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin.css" />
</head>
	<body>
	
	<ul>
		<li><a href="viewtakeout.php">View Take Out Orders</a></li>
		<li><a href="viewreservations.php">View Reservations</a></li>
		<li><a href="contact.asp">View Black Listed Customers</a></li>
	</ul>
	<br>
	<br>	

	<table border='1'>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>From Time</td>
			<td>To Time</td>
			<td>Date</td>
			<td>Cancel Reservations</td>
		<tr>
	<form action="removeorders.php" method="post">
	<?php
	
		$query = "SELECT * FROM restaurant.reservations";
		$items = $db->query($query);
		//$array = $items->fetchAll();
		
		
		foreach($items as $item) : 
			 echo '<tr><td>' . $item['guestfname'] . '</td>'; 
			 echo '<td>' . $item['guestlname'] . '</td>'; 
			 echo '<td>' . $item['fromtime'] . '</td>'; 
			 echo '<td>' . $item['totime'] . '</td>'; 
			 echo '<td>' . $item['date'] . '</td>';
			 $id = $item['idreservations'];
			 echo '<td><input type="checkbox" name="reservations[]" value="' .$id . '"></td></tr>';
	    endforeach; 
	?>
	
	</table>
	
	<br>
	
		<input type="submit" value="Cancel Reservations">
	</form>
	
	<form action="logout.php" method="post">
		<input type="submit" value="Good Bye">
	</form>
	
	</body>
</html>