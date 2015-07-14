<?php
	$alias = isset($_POST['alias']) ? $_POST['alias'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	
	
	include("includeDB.php");

	mysql_query("INSERT INTO accounts (alias, email, password) 
				 VALUES('$alias', '$email', '$password')") or die(mysql_error());
	
	header("Location: index.php");
?>