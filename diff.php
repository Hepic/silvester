<?php
	include("includeDB.php");
	
	mysql_query("INSERT INTO comments(userid, postid, username, message)
				VALUES(1, 3, 'antony', 'first comment !')") or die(mysql_error());
?>