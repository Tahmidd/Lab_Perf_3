<?php

	session_start();
	setcookie("uname", $uname, time()-3, "/");
	header('location: ../views/login.php');
?>