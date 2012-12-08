<?php
    require_once('database.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="restaurant.css" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
	<title>Thai Republic - Check Out</title>
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
			Order Information: <br><br>
			<form action="thankyou.php" method="post">
				<?php 
					$edamameTotal=0;
					if(!isset($_SESSION['cart']['1']))
					{
						$_SESSION['cart']['1']='0';
					}
					if($_SESSION['cart']['1'] != 0)
					{
						$query = "SELECT * FROM restaurant.menu where sessionname='edamame';";
						$items = $db->query($query);
						$array = $items->fetchAll();
						
						for($i=1;$i<=$_SESSION['cart']['1'];$i++)
						{
							$edamameTotal = $_SESSION['cart']['1'] * $array[0]['price'];
						}
						echo "Edamame Quantity: " . $_SESSION['cart']['1'] . '. Price: $' .$edamameTotal . '<br>';
					}
					
					$dumplingsTotal=0;
					if(!isset($_SESSION['cart']['2']))
					{
						$_SESSION['cart']['2']='0';
					}
					if($_SESSION['cart']['2'] != 0)
					{
						$query = "SELECT * FROM restaurant.menu where sessionname='dumplings';";
						$items = $db->query($query);
						$array = $items->fetchAll();
						
						for($i=1;$i<=$_SESSION['cart']['2'];$i++)
						{
							$dumplingsTotal = $_SESSION['cart']['2'] * $array[0]['price'];
						}
						echo "Dumpling Quantity: " . $_SESSION['cart']['2'] . '. Price: $' .$dumplingsTotal . '<br>';
					}
					
					$bangkokCurryTotal=0;
					if(!isset($_SESSION['cart']['3']))
					{
						$_SESSION['cart']['3']='0';
					}
					if($_SESSION['cart']['3'] != 0)
					{
						$query = "SELECT * FROM restaurant.menu where sessionname='bangkokcurry';";
						$items = $db->query($query);
						$array = $items->fetchAll();
						
						for($i=1;$i<=$_SESSION['cart']['3'];$i++)
						{
							$bangkokCurryTotal = $_SESSION['cart']['3'] * $array[0]['price'];
						}
						echo "Bangkok Curry Quantity: " . $_SESSION['cart']['3'] . '. Price: $' .$bangkokCurryTotal . '<br>';
					}
					
					$padThaiTotal=0;
					if(!isset($_SESSION['cart']['4']))
					{
						$_SESSION['cart']['4']='0';
					}
					if($_SESSION['cart']['4'] != 0)
					{
						$query = "SELECT * FROM restaurant.menu where sessionname='padthai';";
						$items = $db->query($query);
						$array = $items->fetchAll();
						
						for($i=1;$i<=$_SESSION['cart']['4'];$i++)
						{
							$padThaiTotal = $_SESSION['cart']['4'] * $array[0]['price'];
						}
						echo "Pad Thai Quantity: " . $_SESSION['cart']['4'] . '. Price: $' .$padThaiTotal . '<br>';
					}
					
					$siamSunRayTotal=0;
					if(!isset($_SESSION['cart']['5']))
					{
						$_SESSION['cart']['5']='0';
					}
					if($_SESSION['cart']['5'] != 0)
					{
						$query = "SELECT * FROM restaurant.menu where sessionname='siamsunray';";
						$items = $db->query($query);
						$array = $items->fetchAll();
						
						for($i=1;$i<=$_SESSION['cart']['5'];$i++)
						{
							$siamSunRayTotal = $_SESSION['cart']['5'] * $array[0]['price'];
						}
						echo "Siam SunRay Quantity: " . $_SESSION['cart']['5'] . '. Price: $' .$siamSunRayTotal . '<br>';
					}
					
					$blueHawaiianTotal=0;
					if(!isset($_SESSION['cart']['6']))
					{
						$_SESSION['cart']['6']='0';
					}
					if($_SESSION['cart']['6'] != 0)
					{
						$query = "SELECT * FROM restaurant.menu where sessionname='bluehawaiian';";
						$items = $db->query($query);
						$array = $items->fetchAll();
						
						for($i=1;$i<=$_SESSION['cart']['6'];$i++)
						{
							$blueHawaiianTotal = $_SESSION['cart']['6'] * $array[0]['price'];
						}
						echo "Blue Hawaiian Quantity: " . $_SESSION['cart']['6'] . '. Price: $' .$blueHawaiianTotal . '<br>';
					}
					
					$chiantiTotal=0;
					if(!isset($_SESSION['cart']['7']))
					{
						$_SESSION['cart']['7']='0';
					}
					if($_SESSION['cart']['7'] != 0)
					{
						$query = "SELECT * FROM restaurant.menu where sessionname='chianti';";
						$items = $db->query($query);
						$array = $items->fetchAll();
						
						for($i=1;$i<=$_SESSION['cart']['7'];$i++)
						{
							$chiantiTotal = $_SESSION['cart']['7'] * $array[0]['price'];
						}
						echo "Chianti Quantity: " . $_SESSION['cart']['7'] . '. Price: $' .$chiantiTotal . '<br>';
					}
					
					$cabernetTotal=0;
					if(!isset($_SESSION['cart']['8']))
					{
						$_SESSION['cart']['8']='0';
					}
					if($_SESSION['cart']['8'] != 0)
					{
						$query = "SELECT * FROM restaurant.menu where sessionname='cabernet';";
						$items = $db->query($query);
						$array = $items->fetchAll();
						
						for($i=1;$i<=$_SESSION['cart']['8'];$i++)
						{
							$cabernetTotal = $_SESSION['cart']['8'] * $array[0]['price'];
						}
						echo "Cabernet Quantity: " . $_SESSION['cart']['8'] . '. Price: $' .$cabernetTotal . '<br>';
					}
					echo 'Total: $';
					$totalSale = $edamameTotal + $dumplingsTotal + $bangkokCurryTotal + $padThaiTotal + $siamSunRayTotal + $blueHawaiianTotal + $chiantiTotal + $cabernetTotal;
					echo $totalSale;
					echo "<input type=\"hidden\" name=\"totalSale\" value=\"$totalSale\">";
				?>
				<br>
				<div id="paymentblock">
					Sorry We do Not Deliver to Alaska<br>
					Delivery and Payment Information:<br><br>
					First name: <input type="text" name="firstname" required="required"><br>
					Last name: <input type="text" name="lastname" required="required"><br>
					Address: <input type="text" name="address" required="required"><br>
					City: <input type="text" name="city" required="required"><br>
					State: <!--Left out Alaska We do not deliver there-->					
					<select name="state">
						<option value="AL" >AL</option>
						<option value="AZ" >AZ</option>
						<option value="AR" >AR</option>
						<option value="CA" >CA</option>
						<option value="CO" >CO</option>
						<option value="CT" >CT</option>
						<option value="DE" >DE</option>
						<option value="FL" >FL</option>
						<option value="GA" >GA</option>
						<option value="HI" >HI</option>
						<option value="ID" >ID</option>
						<option value="IL" >IL</option>
						<option value="IN" >IN</option>
						<option value="IA" >IA</option>
						<option value="KS" >KS</option>
						<option value="KY" >KY</option>
						<option value="LA" >LA</option>
						<option value="ME" >ME</option>
						<option value="MD" >MD</option>
						<option value="MA" >MA</option>
						<option value="MI" >MI</option>
						<option value="MN" >MN</option>
						<option value="MS" >MS</option>
						<option value="MO" >MO</option>
						<option value="MT" >MT</option>
						<option value="NE" >NE</option>
						<option value="NV" >NV</option>
						<option value="NH" >NH</option>
						<option value="NJ" >NJ</option>
						<option value="NM" >NM</option>
						<option value="NY" >NY</option>
						<option value="NC" >NC</option>
						<option value="ND" >ND</option>
						<option value="OH" >OH</option>
						<option value="OK" >OK</option>
						<option value="OR" >OR</option>
						<option value="PA" >PA</option>
						<option value="RI" >RI</option>
						<option value="SC" >SC</option>
						<option value="SD" >SD</option>
						<option value="TN" >TN</option>
						<option value="TX" >TX</option>
						<option value="UT" >UT</option>
						<option value="VT" >VT</option>
						<option value="VA" >VA</option>
						<option value="WA" >WA</option>
						<option value="WV" >WV</option>
						<option value="WI" >WI</option>
						<option value="WY" >WY</option>
					</select>
					<br>
					Zip: <input type="text" name="zip" required="required"><br>
					Credit Card: <input type="text" name="cc" required="required" maxlength="16"><br>
					<input type="submit" value="Submit Information">
				</div>
			</form>
		</div>
		<div id="bottom"></div>
	</div>
	</br>

</body>


</html>