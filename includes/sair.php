<?php
	session_start();
	
	session_destroy();
	mysql_close();
	header('Location: ../login.php');

?>