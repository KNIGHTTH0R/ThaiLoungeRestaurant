<?php
	session_start();
    require_once('database.php');
	
	
	$username=$_POST['username']; 
	$password=$_POST['password']; 
	
	$sql="SELECT * FROM restaurant.admin WHERE username='$username' and password='$password'";
	$query_items = $db->query($sql);
	$cred_array = $query_items->fetchAll();
	
	$_SESSION['thaiAdmin']='false';
	
	if(count($cred_array) == 1)
	{
		$_SESSION['thaiAdmin'] = 'true';
		header("location:adminhome.php");
	}
	else
	{
		header("location:login.php");
	}
	
?>