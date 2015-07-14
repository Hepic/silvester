<?php
	if(session_id() == "")
		session_start();
		
	$sessionUser = isset($_SESSION['alias']) ? $_SESSION['alias'] : "Guest";
	$sessionUserId = isset($_SESSION['userid']) ? $_SESSION['userid'] : "-1";
	$comment_msg = isset($_POST['comment_msg']) ? $_POST['comment_msg'] : "";
	$comment_msg = htmlspecialchars($comment_msg);
	$postId = isset($_POST['post_id']) ? $_POST['post_id'] : "";
	
	
	include("includeDB.php");
	
	mysql_query("INSERT INTO comments (userid, postid, username, message)
				 VALUES('$sessionUserId', '$postId', '$sessionUser', '$comment_msg')") or die(mysql_error());
				 
	header("Location: communication.php");
?>