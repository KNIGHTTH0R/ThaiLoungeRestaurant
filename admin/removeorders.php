<?php
	session_start();
    require_once('database.php');
	
	
	if(!isset($_SESSION['thaiAdmin']) || $_SESSION['thaiAdmin'] == 'false')
	{
		header("location:login.php");
	}
	else
	{
		if(isset($_POST['orders']))
		{
			$array = $_POST['orders'];
			
			foreach($array as $item) : 
				$query = "DELETE FROM restaurant.checkout where id = $item";
				$db->exec($query);
			endforeach; 
			header("location:viewtakeout.php");
		}
		else
		{
			header("location:viewtakeout.php");
		}
	}
	
?>