<?php
    require_once('database.php');

    // Get name for current category
    //$query = "SELECT * FROM restaurant.menu where type='wine';";
	
	
	//$menu_item = $menu_items->fetch();
    //$category = $category->fetch();
    //$category_name = $category['categoryName'];

    // Get all categories
    //$query = 'SELECT * FROM categories
   //           ORDER BY categoryID';
   // $categories = $db->query($query);

    // Get products for selected category
   // $query = "SELECT * FROM products
   //           WHERE categoryID = $category_id
   //           ORDER BY productID";
   // $products = $db->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="restaurant.css" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
	<title>Thai Republic - Specials</title>
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
			<!--Date: <div id="datepicker"></div>
					<input type="text" name="something" value="thevalue" />-->
					<?php date_default_timezone_set('America/New_York'); /*echo date('m/d/Y');  echo(date_default_timezone_get());*/ $todaysDate=date('m/d/Y');?>
					
					<?php 
					
					//$todaysDate='12';
					$query = "SELECT * FROM restaurant.Specials where date='" . $todaysDate . "';";
					$specials = $db->query($query);
					$data_array = $specials->fetchAll();
					?>
					
					<?php 
					
						foreach($data_array as $special) :
							echo '<center><b>' . $special['specials'] . '</b></center>';
						endforeach;
						
						
						$arraySize = count($data_array);
						if($arraySize=='0')
						{			
							echo '<center><b>Sorry No Specials Today</b></center>';
						}
					?>
						
					
	
		</div>
		<div id="bottom"></div>
	</div>
	</br>

</body>

<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker({
			onSelect: function(dateText, inst) {
				var test = $("input[name='something']").val();
				
			}
		});
    });
</script>



</html>