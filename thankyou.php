<?php
    require_once('database.php');
	session_start();
	require_once('Encryption.php');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="restaurant.css" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
	<title>Thai Republic - Thank Your!</title>
</head>


<body>
	<div class="container">
		<div id="nav">
			<div class="wrap">
				<ul>
					<li><a href="home.html">Home</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="specials.php">Todays Specials</a></li>
					<li><a href="cart.php">View Cart</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					<li><a href="reservations.php">Reservations</a></li>
					<li><a href="checkout.php">Check Out</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="menuContainer">
		<div id="tableHeader">
			  <span id="thairepublicheader">Thai Republic : Explore your Senses</span>
		</div>
		<div id="leftColumnMenu">
			<img border="0" src="/Final/DecorativeImages/lotus.jpg" alt="Edamame" width="198" height="228"><br>
			<img border="0" src="/Final/DecorativeImages/thailore.jpg" alt="Edamame" width="198" height="228"><br>
			<img border="0" src="/Final/DecorativeImages/lotus.jpg" alt="Edamame" width="198" height="200"><br>
		</div>
		<div id="rightColumn">
			<div id="paymentblock">
			
								
				<?php
				
					if(!empty($_POST['address']))
					{
						 echo 'Thank you ' . $_POST["firstname"] . '! Your order is in our Database!<br><br>';
						 echo 'Total Sale Charged: ' . $_POST["totalSale"];
						 
						 date_default_timezone_set('America/New_York');
						 $todaysDate = date('mdY'); 

						$converter = new Encryption;
						$encodedCC = $converter->encode('$_POST[cc]');
						$encodedAddress = $converter->encode('$_POST[address]');
						$insertCheckout = "INSERT INTO restaurant.checkout (fname, lname, address, city, state, zip, creditcard, totalsale, date) VALUES ('$_POST[firstname]','$_POST[lastname]','$encodedAddress' ,'$_POST[city]', '$_POST[state]', '$_POST[zip]', '$encodedCC', $_POST[totalSale],  $todaysDate)";
						$db->exec($insertCheckout);
						$_SESSION['cart']['1']='0';
						$_SESSION['cart']['2']='0';
						$_SESSION['cart']['3']='0';
						$_SESSION['cart']['4']='0';
						$_SESSION['cart']['5']='0';
						$_SESSION['cart']['6']='0';
						$_SESSION['cart']['7']='0';
						$_SESSION['cart']['8']='0';

					}
					else
					{
						echo 'No Purchase Has Been Made. Please Add Items to the Cart and Make Your Payment';
					}
				?>
			</div>
			
		</div>
		<div id="bottom"></div>
	</div>
	</br>

</body>


</html>