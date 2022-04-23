<?php 
	session_start();
	$con = mysqli_connect("127.0.0.1",root,"","MPIT-SquadGame-2022");
	$dir = "asset/img/CourseImg/";
	$destination = $dir . basename($_FILES['image']['name']);
	$name = $_FILES['image']['tmp_name'];
	$upload = move_uploaded_file($name, $destination);
	$insert = "INSERT INTO Courses (Title, Descriptions, UserID, img) VALUES ('{$_POST["title"]}', '{$_POST["description"]}','{$_SESSION["id"]}','{$destination}')";
	$result_insert = mysqli_query($con, $insert);
	header("Location: catalog.php");
 ?>