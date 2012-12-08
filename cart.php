<?php
    require_once('database.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="restaurant.css" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
	<title>Thai Republic - View Cart</title>
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
			<?php
	
				//Check if the session cart is set. If not initialize it
				if(!isset($_SESSION['cart']['1']))
				{
					$_SESSION['cart']['1']='0';
				}
				if(!isset($_SESSION['cart']['2']))
				{
					$_SESSION['cart']['2']='0';
				}
				if(!isset($_SESSION['cart']['3']))
				{
					$_SESSION['cart']['3']='0';
				}
				if(!isset($_SESSION['cart']['4']))
				{
					$_SESSION['cart']['4']='0';
				}
				if(!isset($_SESSION['cart']['5']))
				{
					$_SESSION['cart']['5']='0';
				}
				if(!isset($_SESSION['cart']['6']))
				{
					$_SESSION['cart']['6']='0';
				}
				if(!isset($_SESSION['cart']['7']))
				{
					$_SESSION['cart']['7']='0';
				}
				if(!isset($_SESSION['cart']['8']))
				{
					$_SESSION['cart']['8']='0';
				}
				
				//Set the quantitiy variable if the Post request is NOT empty
				if(!empty($_POST['edamame']))
				{
					$quantityEdamame = $_POST['edamame'];
					if($quantityEdamame=='clearedamame')
					{
						
						$_SESSION['cart']['1'] = '0';
					}
					elseif($quantityEdamame=='removeedamame')
					{
						$_SESSION['cart']['1']--;
					}
					else
					{
						for ($i=0; $i<$quantityEdamame; $i++)
						{
							$_SESSION['cart']['1']++;
						}
					}
				}
				
				if(!empty($_POST['dumplings']))
				{
					$quantityDumplings = $_POST['dumplings'];
					if($quantityDumplings=='cleardumplings')
					{
						
						$_SESSION['cart']['2'] = '0';
					}
					elseif($quantityDumplings=='removedumpling')
					{
						$_SESSION['cart']['2']--;
					}
					else
					{
						for ($i=0; $i<$quantityDumplings; $i++)
						{
							$_SESSION['cart']['2']++;
						}
					}
				}
				
				if(!empty($_POST['bangkokcurry']))
				{
					$quantityBangkokCurry = $_POST['bangkokcurry'];
					if($quantityBangkokCurry=='clearbangkokcurry')
					{
						$_SESSION['cart']['3'] = '0';
					}
					elseif($quantityBangkokCurry=='removebangkokcurry')
					{
						$_SESSION['cart']['3']--;
					}
					else
					{
						for ($i=0; $i<$quantityBangkokCurry; $i++)
						{
							$_SESSION['cart']['3']++;
						}
					}
				}
				
				if(!empty($_POST['padthai']))
				{
					$quantityPadThai = $_POST['padthai'];
					if($quantityPadThai=='clearpadthai')
					{
						$_SESSION['cart']['4'] = '0';
					}
					elseif($quantityPadThai=='removepadthai')
					{
						$_SESSION['cart']['4']--;
					}
					else
					{
						for ($i=0; $i<$quantityPadThai; $i++)
						{
							$_SESSION['cart']['4']++;
						}
					}
				}
				
				if(!empty($_POST['siamsunray']))
				{
					$quantitySiamSunray = $_POST['siamsunray'];
					if($quantitySiamSunray=='clearsiamsunray')
					{
						$_SESSION['cart']['5'] = '0';
					}
					elseif($quantitySiamSunray=='removesiamsunray')
					{
						$_SESSION['cart']['5']--;
					}
					else
					{
						for ($i=0; $i<$quantitySiamSunray; $i++)
						{
							$_SESSION['cart']['5']++;
						}
					}
				}
				
				if(!empty($_POST['bluehawaiian']))
				{
					$quantityBlueHawaiian = $_POST['bluehawaiian'];
					if($quantityBlueHawaiian=='clearbluehawaiian')
					{
						$_SESSION['cart']['6'] = '0';
					}
					elseif($quantityBlueHawaiian=='removebluehawaiian')
					{
						$_SESSION['cart']['6']--;
					}
					else
					{
						for ($i=0; $i<$quantityBlueHawaiian; $i++)
						{
							$_SESSION['cart']['6']++;
						}
					}
				}
				
				if(!empty($_POST['chianti']))
				{
					$quantityChianti = $_POST['chianti'];
					if($quantityChianti=='clearchianti')
					{
						$_SESSION['cart']['7'] = '0';
					}
					elseif($quantityChianti=='removechianti')
					{
						$_SESSION['cart']['7']--;
					}
					else
					{
						for ($i=0; $i<$quantityChianti; $i++)
						{
							$_SESSION['cart']['7']++;
						}
					}
				}
				
				if(!empty($_POST['cabernet']))
				{
					$quantityCabernet = $_POST['cabernet'];
					if($quantityCabernet=='clearcabernet')
					{
						$_SESSION['cart']['8'] = '0';
					}
					elseif($quantityCabernet=='removecabernet')
					{
						$_SESSION['cart']['8']--;
					}
					else
					{
						for ($i=0; $i<$quantityCabernet; $i++)
						{
							$_SESSION['cart']['8']++;
						}
					}
				}

				echo "Your Cart: <br>" ;
			
			?>
			
			<!--Edamame-->
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['1'] != 0)
						{
							echo "Edamame " . $_SESSION['cart']['1'] . " &nbsp; <input type=\"text\" maxlength=\"2\" size=\"1\" name=\"edamame\" value=\"0\"> <input type=\"submit\" value=\"Add\"><br>";
						}
					?>
				</form>
			</div>
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['1'] != 0)
						{
							echo "<input type=\"hidden\" name=\"edamame\" value=\"removeedamame\"><input type=\"submit\" value=\"Remove One Item\">";
						}
					?>
				</form>
			</div>
			<form action="cart.php" method="post">
				<?php 
					if($_SESSION['cart']['1'] != 0)
					{
						echo "<input type=\"hidden\" name=\"edamame\" value=\"clearedamame\"><input type=\"submit\" value=\"Clear\">";
					}
				?>
			</form>

			
			<br>
			
			<!--Dumplings-->
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['2'] != 0)
						{
							echo "Dumplings " . $_SESSION['cart']['2'] . " &nbsp; <input type=\"text\" maxlength=\"2\" size=\"1\" name=\"dumplings\" value=\"0\"> <input type=\"submit\" value=\"Add\"><br>";
						}
						?>
				</form>
			</div>
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['2'] != 0)
						{
							echo "<input type=\"hidden\" name=\"dumplings\" value=\"removedumpling\"><input type=\"submit\" value=\"Remove One Item\">";
						}
					?>
				</form>
			</div>
			<form action="cart.php" method="post">
				<?php 
					if($_SESSION['cart']['2'] != 0)
					{
						echo "<input type=\"hidden\" name=\"dumplings\" value=\"cleardumplings\"><input type=\"submit\" value=\"Clear\"><br>";
					}
				?>
			</form>
			
			<br>
			
			<!--Bangkok Curry-->
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['3'] != 0)
						{
							echo "Bangkok Curry " . $_SESSION['cart']['3'] . " &nbsp; <input type=\"text\" maxlength=\"2\" size=\"1\" name=\"bangkokcurry\" value=\"0\"> <input type=\"submit\" value=\"Add\"><br>";
						}
						?>
				</form>
			</div>
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['3'] != 0)
						{
							echo "<input type=\"hidden\" name=\"bangkokcurry\" value=\"removebangkokcurry\"><input type=\"submit\" value=\"Remove One Item\">";
						}
					?>
				</form>
			</div>
			<form action="cart.php" method="post">
				<?php 
					if($_SESSION['cart']['3'] != 0)
					{
						echo "<input type=\"hidden\" name=\"bangkokcurry\" value=\"clearbangkokcurry\"><input type=\"submit\" value=\"Clear\"><br>";
					}
				?>
			</form>
			
			<br>
			
			<!--Pad Thai-->
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['4'] != 0)
						{
							echo "Pad Thai " . $_SESSION['cart']['4'] . " &nbsp; <input type=\"text\" maxlength=\"2\" size=\"1\" name=\"padthai\" value=\"0\"> <input type=\"submit\" value=\"Add\"><br>";
						}
						?>
				</form>
			</div>
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['4'] != 0)
						{
							echo "<input type=\"hidden\" name=\"padthai\" value=\"removepadthai\"><input type=\"submit\" value=\"Remove One Item\">";
						}
					?>
				</form>
			</div>
			<form action="cart.php" method="post">
				<?php 
					if($_SESSION['cart']['4'] != 0)
					{
						echo "<input type=\"hidden\" name=\"padthai\" value=\"clearpadthai\"><input type=\"submit\" value=\"Clear\"><br>";
					}
				?>
			</form>
			
			
			<!--Siam SunRay -->
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['5'] != 0)
						{
							echo "Siam Sunray " . $_SESSION['cart']['5'] . " &nbsp; <input type=\"text\" maxlength=\"2\" size=\"1\" name=\"siamsunray\" value=\"0\"> <input type=\"submit\" value=\"Add\"><br>";
						}
						?>
				</form>
			</div>
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['5'] != 0)
						{
							echo "<input type=\"hidden\" name=\"siamsunray\" value=\"removesiamsunray\"><input type=\"submit\" value=\"Remove One Item\">";
						}
					?>
				</form>
			</div>
			<form action="cart.php" method="post">
				<?php 
					if($_SESSION['cart']['5'] != 0)
					{
						echo "<input type=\"hidden\" name=\"siamsunray\" value=\"clearsiamsunray\"><input type=\"submit\" value=\"Clear\"><br>";
					}
				?>
			</form>
			
			<!--Blue Hawaiian -->
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['6'] != 0)
						{
							echo "Blue Hawaiian " . $_SESSION['cart']['6'] . " &nbsp; <input type=\"text\" maxlength=\"2\" size=\"1\" name=\"bluehawaiian\" value=\"0\"> <input type=\"submit\" value=\"Add\"><br>";
						}
						?>
				</form>
			</div>
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['6'] != 0)
						{
							echo "<input type=\"hidden\" name=\"bluehawaiian\" value=\"removebluehawaiian\"><input type=\"submit\" value=\"Remove One Item\">";
						}
					?>
				</form>
			</div>
			<form action="cart.php" method="post">
				<?php 
					if($_SESSION['cart']['6'] != 0)
					{
						echo "<input type=\"hidden\" name=\"bluehawaiian\" value=\"clearbluehawaiian\"><input type=\"submit\" value=\"Clear\"><br>";
					}
				?>
			</form>
			
			<!--Chianti -->
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['7'] != 0)
						{
							echo "Chianti " . $_SESSION['cart']['7'] . " &nbsp; <input type=\"text\" maxlength=\"2\" size=\"1\" name=\"chianti\" value=\"0\"> <input type=\"submit\" value=\"Add\"><br>";
						}
						?>
				</form>
			</div>
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['7'] != 0)
						{
							echo "<input type=\"hidden\" name=\"chianti\" value=\"removechianti\"><input type=\"submit\" value=\"Remove One Item\">";
						}
					?>
				</form>
			</div>
			<form action="cart.php" method="post">
				<?php 
					if($_SESSION['cart']['7'] != 0)
					{
						echo "<input type=\"hidden\" name=\"chianti\" value=\"clearchianti\"><input type=\"submit\" value=\"Clear\"><br>";
					}
				?>
			</form>
			
			<!--Cabernet -->
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['8'] != 0)
						{
							echo "Cabernet " . $_SESSION['cart']['8'] . " &nbsp; <input type=\"text\" maxlength=\"2\" size=\"1\" name=\"cabernet\" value=\"0\"> <input type=\"submit\" value=\"Add\"><br>";
						}
						?>
				</form>
			</div>
			<div style="float: left;">
				<form action="cart.php" method="post">
					<?php 
						if($_SESSION['cart']['8'] != 0)
						{
							echo "<input type=\"hidden\" name=\"cabernet\" value=\"removecabernet\"><input type=\"submit\" value=\"Remove One Item\">";
						}
					?>
				</form>
			</div>
			<form action="cart.php" method="post">
				<?php 
					if($_SESSION['cart']['8'] != 0)
					{
						echo "<input type=\"hidden\" name=\"cabernet\" value=\"clearcabernet\"><input type=\"submit\" value=\"Clear\"><br>";
					}
				?>
			</form>
			
			
		</div>
		<div id="bottom"></div>
	</div>
	</br>

</body>





</html>