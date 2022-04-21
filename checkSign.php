<?php 
	session_start();
	$_SESSION['RegAndSign'] = 0;
	header("Location: indexRegAndSign.php?");
?>