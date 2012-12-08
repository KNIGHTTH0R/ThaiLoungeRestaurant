<?php
	session_start();
    require_once('database.php');

    // Get name for current category
    $query = "SELECT * FROM restaurant.menu where type='appetizer';";
    $menu_items = $db->query($query);
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
	<link href="css/lightbox.css" rel="stylesheet" />
	<title>Thai Republic - Menu</title>
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
			<ul class='menuNavigation'>
				<li><a href="starters.php">Starters</a></li>
				<li><a href="dinner.php">Dinner</a></li>
				<li><a href="cocktail.php">Cocktails</a></li>
				<li><a href="wine.php">Wine</a></li>
			</ul>
		</div>
		<div id="rightColumn">
			Starters</br></br>
			<form action="cart.php" method="post">
				<?php foreach($menu_items as $menu_item) : ?>
					<?php echo $menu_item['name'];?><br>
					<A HREF=<?php echo $menu_item['imagelocation'];?> rel="lightbox[food]" title=<?php echo $menu_item['name'];?>><img border="0" src=<?php echo $menu_item['imagelocation'];?> alt=<?php echo $menu_item['name'];?> width="304" height="228"></a><br>
					Price: $<?php echo $menu_item['price'];?> &nbsp;&nbsp; Allergies: <?php echo $menu_item['allergies'];?> &nbsp;&nbsp; <input type="text" maxlength="2" size="1" name=<?php echo $menu_item['sessionname'];?> value="0">Quantity<br><br>
				<?php endforeach; ?>
				<input type="submit" value="Add To Cart">
			</form>
		</div>
		<div id="bottom"></div>
	</div>
	</br>

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script src="js/lightbox.js"></script>
<script>
	$(document).ready(function(){

	});
</script>



</html>