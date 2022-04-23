<?php 
	session_start();
	$con = mysqli_connect("127.0.0.1",root,"","MPIT-SquadGame-2022");
	$deleteSub = "DELETE FROM Sub WHERE CourseID = '{$_POST['courseID']}' and UserID = '{$_SESSION['id']}'";
	$resultDelete = mysqli_query($con, $deleteSub);
	header("Location: catalog.php");
 ?>