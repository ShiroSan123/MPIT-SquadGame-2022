<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-SquadGame-2022");
$query = "SELECT * FROM Users WHERE id='{$_SESSION['id']}'";
$result = mysqli_query($connect, $query);
$stroka = $result->fetch_assoc();
if ($_SESSION['id']==null) {
	$_SESSION['RegAndSign'] == 1;
	header("Location: indexRegAndSign.php");
}
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
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top col-12 border-bottom" style="height: 8vh; background: white">
		<div class="col-12	">
			<div class="row" style="margin-left: 0; margin-right: 0;">
				<!-- Колонка логотипа -->
				<div class="col-1" style="height: 8vh; padding-top: 1vh;">
					<img id="logo" class="" src="asset/img/logo.svg" id="logoMain" alt="" style="height: 6vh; margin-left: 0.3vw;">				</div>
				<!-- Средняя колонка -->
				<div class="col-9" style="height: 8vh; padding-top: 2vh;">
					<div class="row" style="margin-left: 0; margin-right: 0;">
						<div class="col-3 text-center">
							<a href="catalog.php" class="text-dark" style="text-decoration: none; font-size: 1.3vw">Каталог</a>
						</div>
						<div class="col-3 text-center">
							<a href="indexCreate.php" class="text-dark" style="text-decoration: none; font-size: 1.3vw">Создать курс</a>
						</div>
						<div class="col-3 text-center">
							
						</div>
						<div class="col-3 text-center">
							
						</div>
					</div>
				</div>
				<!-- Колонка с Ссылками, на профиль, вход и регистрацию -->
				<div class="col-2 d-flex" style="height: 8vh; padding-top: 2vh;">
					<?php if ($_SESSION['id']!=null) { ?>
						<h4><a href="logOut.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;">Выход</a></h4>
						<h4 style="margin-left: 2vw"><a href="profile.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;"><?php echo $stroka['Login'] ?></a></h4>
					<?php } else {?>
						<h4><a href="checkSign.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;">Войти</a></h4>
						<h4 style="margin-left: 2vw"><a href="checkReg.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;">Зарегестрироваться</a></h4>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->
	<!-- ======= Main create ======= -->
	<div class="col-6 mx-auto shadow-lg rounded" style="height: 60vh; margin-top: 16vh;">
		<div class="col-10 mx-auto" style="padding-top: 5vh; padding-bottom: 5vh;">
			<form action="create.php" method="post" enctype="multipart/form-data">
				<h1>Создай свой курс</h1>
				<p>Путь в тысячу ли начинается с первого шага...</p>
				<input required name="title" id="name" type="text" class="form-control" placeholder="Название"><br>
				<textarea required name="description" id="description" type="text" class="form-control" placeholder="Описание"></textarea><br>
				<input type="file" name="image">
				<button class="btn shadow-sm" style="margin-top: 2vh;">Создать</button>
			</form>
		</div>
	</div>
	<!-- End Main create -->
	<!-- ======= Footer ======= -->
	<div class="col-12" style="height: 20vh; background: #C4C4C4; margin-top: 20vh;">
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