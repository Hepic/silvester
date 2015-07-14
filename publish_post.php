<?php
	if(session_id() == "")
		session_start();
		
	$sessionUser = isset($_SESSION['alias']) ? $_SESSION['alias'] : "Guest";
	$sessionUserId = isset($_SESSION['userid']) ? $_SESSION['userid'] : "-1";
	$post_msg = isset($_POST['post_msg']) ? $_POST['post_msg'] : "";
	$post_msg = htmlspecialchars($post_msg);
	
	
	include("includeDB.php");
	
	mysql_query("INSERT INTO posts (userid, username, message)
				 VALUES('$sessionUserId', '$sessionUser', '$post_msg')") or die(mysql_error());
				 
	header("Location: communication.php");
?>