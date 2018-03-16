<?php
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	if ($login == "admin" and $password == "admin") 
	{
		header("Location: http://localhost:8888/aurora.com/trade.html");
		exit();
	} else 
	{
		echo "No";
	}

?>