<?php
	if(session_id() == "")
		session_start();
	
	$alias = isset($_POST['alias']) ? $_POST['alias'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$cookieAlias = isset($_COOKIE['alias']) ? $_COOKIE['alias'] : '';
	$cookiePassword = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
	$cookieId = isset($_COOKIE['userid']) ? $_COOKIE['userid'] : '';
	
	
	include("includeDB.php");
	

	if(!empty($cookieAlias) && !empty($cookiePassword) && !empty($cookieId))
	{
		setcookie("alias", $cookieAlias, time()+3600, "/");
		setcookie("password", $cookiePassword, time()+3600, "/");
		setcookie("userid", $cookieId, time()+3600, "/");
		
		$_SESSION['alias'] = $cookieAlias;
		$_SESSION['userid'] = $cookieId;
		
		header("Location: communication.php");
		exit;
	}
	
	
	$res = mysql_query("SELECT * FROM accounts 
						WHERE alias='$alias'
						AND password='$password' LIMIT 1") or die(mysql_error());
	
	
	if(mysql_num_rows($res) == 1)
	{
		$row = mysql_fetch_array($res) or die(mysql_error());
		
		setcookie("alias", $alias, time()+3600, "/");
		setcookie("password", $password, time()+3600, "/");
		setcookie("userid", $row['id'], time()+3600, "/");
		
		$_SESSION['alias'] = $alias;
		$_SESSION['userid'] = $row['id'];
		
		header("Location: communication.php");
	}

	else
		header("Location: index.php?error=yes");
	
?>