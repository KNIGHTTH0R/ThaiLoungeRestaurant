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
			<td>Total Sale</td>
			<td>Date</td>
			<td>Remove Order</td>
		<tr>
	<form action="removeorders.php" method="post">
	<?php
	
		$query = "SELECT * FROM restaurant.checkout";
		$items = $db->query($query);
		//$array = $items->fetchAll();
		
		
		foreach($items as $item) : 
			 echo '<tr><td>' . $item['fname'] . '</td>'; 
			 echo '<td>' . $item['lname'] . '</td>'; 
			 echo '<td>$' . $item['totalsale'] . '</td>'; 
			 echo '<td>' . $item['date'] . '</td>';
			 $id = $item['id'];
			 echo '<td><input type="checkbox" name="orders[]" value="' .$id . '"></td></tr>';
	    endforeach; 
	?>
	
	</table>
	
	<br>
	
		<input type="submit" value="Remove Orders">
	</form>
	
	<form action="logout.php" method="post">
		<input type="submit" value="Good Bye">
	</form>
	
	</body>
</html>