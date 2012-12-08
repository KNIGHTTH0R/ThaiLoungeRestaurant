<?php
	session_start();
    require_once('database.php');


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="restaurant.css" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
	<title>Thai Republic - CockTails</title>
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
			Reservation Hours are from 10:30 AM to 9:30 PM on Monday to Saturday<br>
			Sorry for the inconvenience but we do not allow Sunday reservations<br><br>
			<?php
				date_default_timezone_set('America/New_York');
				$todaysDate = date('m/d/Y'); 
				//echo date('m/d/Y');  
				if(!empty($_POST['from']) && !empty($_POST['to']))
				{
					if(($_POST['to'] - $_POST['from']) <= 0)
					{
						echo 'Incorrect Schedule Times';
					}
					elseif($_POST['datetextbox'] == 'Pick A Date')
					{
						echo 'Invalid Date';
					}
					else
					{
						$from = $_POST['from'];
						$to = $_POST['to'];
						$date = $_POST['datetextbox'];
						//$queryFrom = "SELECT * FROM restaurant.reservations where fromtime='" . $from . "' and date='" . $date . "';";
						//$queryTo = "SELECT * FROM restaurant.reservations where totime='" . $to . "' and date='" . $date . "';";
						$query = "SELECT * FROM restaurant.reservations where date='" . $date . "';";
						$insert = "INSERT INTO restaurant.reservations (guestfname, guestlname, fromtime, totime, date) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[from]' ,'$_POST[to]', '$_POST[datetextbox]')";
						//$reservation_items = $db->query($queryFrom);
						//$reservation_items2 = $db->query($queryTo);
						$reservation_items3 = $db->query($query);
						//$data_array = $reservation_items->fetchAll();
						//$data_array2 = $reservation_items2->fetchAll();
						$data_array3 = $reservation_items3->fetchAll();
						$alreadyExists = false;
						
						foreach($data_array3 as $data) :
							if(($from >= $data['fromtime']) && ($from < $data['totime']))
							{
								echo 'Sorry Time is booked';
								$alreadyExists = true;
								break;
							}
							elseif(($to > $data['fromtime']) && ($to <= $data['totime']))
							{
								echo 'Sorry Time is booked';
								$alreadyExists = true;
								break;
							}
							elseif(($from < $data['fromtime']) && ($to > $data['totime']))
							{
								echo 'Sorry Time is booked';
								$alreadyExists = true;
								break;
							}
						endforeach;
						
						$timestamp = strtotime($date);
						$day = date('D', $timestamp);
						//echo $day;
					
						if((count($data_array3) == 0) || $alreadyExists == false)
						{
							if($date < $todaysDate)
							{
								echo 'Date cannot be Before Today';
							}
							elseif($day == 'Sun')
							{
								echo 'Sorry you cannot make a Reservation on Sunday';
							}
							else
							{
								echo 'Table has been Reserved';
								$db->exec($insert);
							}
						}
					}
				}
			?>

			<form action="reservations.php" method="post">
								
					<div id="datepicker"></div>
					<input type="text" name="datetextbox" value="Pick A Date" readonly="readonly"/>
					From:
					<select name="from">
						<option value="1030" >10:30 AM</option>
						<option value="1130" >11:30 AM</option>
						<option value="1230" >12:30 PM</option>
						<option value="1330" >1:30 PM</option>
						<option value="1430" >2:30 PM</option>
						<option value="1530" >3:30 PM</option>
						<option value="1630" >4:30 PM</option>
						<option value="1730" >5:30 PM</option>
						<option value="1830" >6:30 PM</option>
						<option value="1930" >7:30 PM</option>
						<option value="2030" >8:30 PM</option>
					</select>
					To:
					<select name="to">
						<option value="1130" >11:30 AM</option>
						<option value="1230" >12:30 PM</option>
						<option value="1330" >1:30 PM</option>
						<option value="1430" >2:30 PM</option>
						<option value="1530" >3:30 PM</option>
						<option value="1630" >4:30 PM</option>
						<option value="1730" >5:30 PM</option>
						<option value="1830" >6:30 PM</option>
						<option value="1930" >7:30 PM</option>
						<option value="2030" >8:30 PM</option>
						<option value="2130" >9:30 PM</option>
					</select>
					<br>
					First Name: <input type="text" name="fname" value="" required="required"/><br>
					Last Name: <input type="text" name="lname" value="" required="required"/><br>
					<input type="submit" value="Reserve">
			</form>
		</div>
		<div id="bottom"></div>
	</div>
	</br>

</body>

<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script>

$(document).ready(function(){

    $(function() 
	{
        $( "#datepicker" ).datepicker({
			onSelect: function(dateText, inst) {
				$("input[name='datetextbox']").val(dateText);
			}
		});
    });
});

</script>



</html>