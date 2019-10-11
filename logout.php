<?php
	session_start();
	session_unset();
	session_destroy();
//destroy all set variables and sessions
	unset($_COOKIE['session_id']);
	unset($_COOKIE['csrfTokenCookie']);
	setcookie('session_id', '', time() + (86400 * 30), "/");
	setcookie('csrfTokenCookie', '', time() + (86400 * 30), "/");

	header("Location:index.php");
   	exit();


?>