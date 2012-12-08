<?php
	session_start();
?>
<!--<html><body>-->
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
	if(!isset($_SESSION['cart']['7']))
	{
		$_SESSION['cart']['7']='0';
	}
	
	//Set the quantitiy variable if the Post request is NOT empty
	if(!empty($_POST['edamame']))
	{
		$quantityEdamame = $_POST['edamame'];
		for ($i=0; $i<$quantityEdamame; $i++)
		{
			$_SESSION['cart']['1']++;
		}
	}
	if(!empty($_POST['dumplings']))
	{
		$quantityDumplings = $_POST['dumplings'];
		for ($i=0; $i<$quantityDumplings; $i++)
		{
			$_SESSION['cart']['2']++;
		}
	}
	if(!empty($_POST['bangkokcurry']))
	{
		$quantityBangkokCurry = $_POST['bangkokcurry'];
		for ($i=0; $i<$quantityBangkokCurry; $i++)
		{
			$_SESSION['cart']['3']++;
		}
	}
	if(!empty($_POST['padthai']))
	{
		$quantityPadThai = $_POST['padthai'];
		for ($i=0; $i<$quantityPadThai; $i++)
		{
			$_SESSION['cart']['4']++;
		}
	}
	if(!empty($_POST['chianti']))
	{
		$quantityChianti = $_POST['Chianti'];
		for ($i=0; $i<$quantityChianti; $i++)
		{
			$_SESSION['cart']['7']++;
		}
	}
	
	/*if(empty($_POST['Bangkok Curry']))
	{
		echo 'empty';//$quantityBangkokCurry = $_POST['Bangkok Curry'];
	}*/
	/*if(!empty($_POST['Bangkok Curry']))
	{
		$quantityBangkokCurry = $_POST['Bangkok Curry'];
	}
	if(!empty($_POST['Pad Thai']))
	{
		$quantityPadThai = $_POST['Pad Thai'];
	}
	if(!empty($_POST['Siam Sunray']))
	{
		$quantitySiamSunray = $_POST['Siam Sunray'];
	}
	if(!empty($_POST['Blue Hawaiian']))
	{
		$quantityBlueHawaiian = $_POST['Blue Hawaiian'];
	}
	if(!empty($_POST['Chianti']))
	{
		$quantityChianti = $_POST['Chianti'];
	}
	if(!empty($_POST['Cabernet Sauvignon']))
	{
		$quantityCabernet = $_POST['Cabernet Sauvignon'];
	}*/

	
	
	/*for ($i=0; $i<$quantityDumplings; $i++)
	{
		$_SESSION['cart']['2']++;
	}*/
	/*for ($i=0; $i<$quantityBangkokCurry; $i++)
	{
		$_SESSION['cart']['3']++;
	}
	for ($i=0; $i<$quantityPadThai; $i++)
	{
		$_SESSION['cart']['4']++;
	}
	for ($i=0; $i<$quantitySiamSunray; $i++)
	{
		$_SESSION['cart']['5']++;
	}
	for ($i=0; $i<$quantityBlueHawaiian; $i++)
	{
		$_SESSION['cart']['6']++;
	}
	for ($i=0; $i<$quantityChianti; $i++)
	{
		$_SESSION['cart']['7']++;
	}
	for ($i=0; $i<$quantityCabernet; $i++)
	{
		$_SESSION['cart']['8']++;
	}*/
  


  echo "Cart Quantity: <br>" ;
  echo "Edamame" . $_SESSION['cart']['1'] . "<br>";
  echo "Dumplings " . $_SESSION['cart']['2'] . "<br>";
  echo "Curry " . $_SESSION['cart']['3'] . "<br>";
  echo "Pad Thai " . $_SESSION['cart']['4'] . "<br>";
  echo "Chianti " . $_SESSION['cart']['7'] . "<br>";


?>
<!--</body></html>-->