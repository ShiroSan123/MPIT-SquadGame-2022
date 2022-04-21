<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-SquadGame-2022");
$login = '{$_POST["login"]}';
$pass = '{$_POST["password]}';

if ( strlen($login) > 20 || strlen($login) < 4 || strlen($pass) < 9 || strlen($pass) > 20) {
	$_SESSION['RegAndSign'] = 1;
	$_SESSION['tooLongPoL'] = 1;
	header("Location: indexRegAndSign.php?");
	die();
} else {
	$query = "SELECT * FROM Users WHERE Login = '{$_POST["login"]}'";
	$result = mysqli_query($connect, $query);
	$num = mysqli_num_rows($result);

	if($num == 0){
		$query1 = "INSERT INTO Users (Login,FirstName,LastName,Patronymic,Mail,Phone,Password) Values ('{$_POST['login']}','{$_POST['firstName']}','{$_POST['lastName']}','{$_POST['patronymic']}','{$_POST['mail']}','{$_POST['phone']}','{$_POST['password']}')";
		$Reg_insert = mysqli_query($connect, $query1);
		$_SESSION['RegAndSign'] = 1;
		header("Location: index.php");
		$_SESSION['tooLongPoL'] = 0;
	} else {
		$_SESSION['RegAndSign'] = 0;
		$_SESSION['tooLongPoL'] = 0;
		header("Location: indexRegAndSign.php?");
	}
}
?>