<?php 
	session_start();
	$con = mysqli_connect("127.0.0.1",root,"","MPIT-SquadGame-2022");
	$insertSub = "INSERT INTO Sub (UserID, CourseID) VALUES ('{$_SESSION['id']}', '{$_POST["courseID"]}')";
	$result_insert = mysqli_query($con, $insertSub);
	header("Location: catalog.php");
 ?>