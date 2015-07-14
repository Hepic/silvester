<?php
	if(session_id() == "")
		session_start();
		
	setcookie("alias", "clear", time()-3600, "/");
	setcookie("password", "clear", time()-3600, "/");
	setcookie("userid", "clear", time()-3600, "/");

	session_unset();
	session_destroy();
?>