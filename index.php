<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-RLI-2022");
$query = "SELECT * FROM Users WHERE id='{$_SESSION['id']}'";
$result = mysqli_query($connect, $query);
$stroka = $result->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="/path/to/jquery.mCustomScrollbar.css" />
	<style>
		
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top col-12" style="height: 8vh; background: gray;">
		<div class="col-9 mx-auto">
			<div class="row">
				<div class="col-2" style="height: 8vh; padding-top: 1vh;">
					<img id="logo" class="" src="" id="logoMain" alt="" style="height: 6vh">
				</div>
				<div class="col-9" style="height: 8vh; padding-top: 2vh;">

				</div>
				<div class="col-1 d-flex" style="height: 8vh; padding-top: 2vh;">
					<?php if ($_SESSION['id']!=null) { ?>
						<h4 style="margin-left: 1vw;"><a href="logOut.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;">Выход</a></h4>
						<h4 style="margin-left: 1vw;"><a href="function.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;"><?php echo $stroka['Login'] ?></a></h4>
					<?php } else {?>
						<h4 style="margin-left: 1vw;"><a href="checkReg.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;">Зарегестрироваться</a></h4>
						<h4 style="margin-left: 1vw;"><a href="checkSign.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 1vw; font-weight: bold;">Войти</a></h4>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/path/to/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		document.getElementById('logo').onclick = function() {
			window.location.href = 'index.php';
		};
		document.getElementById('logo1').onclick = function() {
			window.location.href = 'index.php';
		};
	</script>
</body>
</html>