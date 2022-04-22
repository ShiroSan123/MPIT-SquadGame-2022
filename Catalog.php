<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-SquadGame-2022");
$query = "SELECT * FROM Users WHERE id='{$_SESSION['id']}'";
$result = mysqli_query($connect, $query);
$stroka = $result->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="asset/css/style.css">
	<script>

	</script>
</head>
<body>
	<!-- ======= Main content ======= -->
	<div class="col-12">
		<div class="row">
			<div class="col-3 fixed-top" style="padding-top: 2.5vh; display: block;">
				<div class="col-9 mx-auto" style="height: 71vh; background: #C4C4C4">
					<a href="index.php" style="text-decoration: none;"><h1 class="text-dark">Main</h1></a>
				</div>
			</div>
			<div class="col-9" style="padding-left: 0; padding-right: 0; margin-left: auto">
				<div class="col-12" style="padding-bottom: 6.5vh;">
					<div class="col-11 mx-auto mt-4" style="height: 30vh;">
						<div class="row">
							<div class="col-9" style="height: 30vh; background: #939393"></div>
							<div class="col-3" style="height: 30vh; background: #C4C4C4"></div>
						</div>
					</div>
					<div class="col-11 mx-auto mt-4" style="height: 30vh;">
						<div class="row">
							<div class="col-9" style="height: 30vh; background: #939393"></div>
							<div class="col-3" style="height: 30vh; background: #C4C4C4"></div>
						</div>
					</div>
					<div class="col-11 mx-auto mt-4" style="height: 30vh;">
						<div class="row">
							<div class="col-9" style="height: 30vh; background: #939393"></div>
							<div class="col-3" style="height: 30vh; background: #C4C4C4"></div>
						</div>
					</div>
					<div class="col-11 mx-auto mt-4" style="height: 30vh;">
						<div class="row">
							<div class="col-9" style="height: 30vh; background: #939393"></div>
							<div class="col-3" style="height: 30vh; background: #C4C4C4"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main content -->
	<!-- ======= Footer ======= -->
	<div class="col-12" style="height: 20vh; background: #C4C4C4;">
		<div class="col-9 mx-auto" style="padding-top: 5vh;">
			<div class="row">
				<div class="col-2" style="height: 8vh; padding-top: 1vh;">
					<img id="logo1" class="" src="asset/img/logos.svg" id="logoMain" alt="" style="height: 8vh">
				</div>
				<div class="col-9" style="height: 8vh; padding-top: 4vh;">
					<p style="font-size: 1vw; font-weight: lighter;">2022 © Все права защищены</p>
				</div>
				<div class="col-1" style="height: 8vh; padding-top: 2vh;">
					<img id="toTop" src="asset/img/arrowUp.svg" alt="" style="height: 5vh;">
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer -->
	<script type="text/javascript">
		let exit = document.querySelector(".exit")
		exit.onclick = function(){
			window.location.href = 'index.php';
		}
		function Exit() {
			window.location.href = 'index.php';
		}
	</script>
</body>
</html>