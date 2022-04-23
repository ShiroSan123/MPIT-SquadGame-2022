<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT-SquadGame-2022");
$query = "SELECT * FROM Users WHERE id='{$_SESSION['id']}'";
$subQue = "SELECT * FROM Sub WHERE UserID = '{$_SESSION['id']}'";
$result = mysqli_query($connect, $query);
$stroka = $result->fetch_assoc();
$resultSub = mysqli_query($connect, $subQue);
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
	<header id="header" class="fixed-top col-12 border-bottom" style="height: 8vh; background: white;">
		<div class="col-12	">
			<div class="row" style="margin-left: 0; margin-right: 0;">
				<!-- Колонка логотипа -->
				<div class="col-1" style="height: 8vh; padding-top: 1vh;">
					<img id="logo" class="" src="asset/img/logo.svg" id="logoMain" alt="" style="height: 6vh; margin-left: 2.9vw;">
				</div>
				<!-- Средняя колонка -->
				<div class="col-9" style="height: 8vh; padding-top: 2vh;">
					<div class="row" style="margin-left: 0; margin-right: 0;">
						<div class="col-3 text-center">
							<a href="index.php" class="text-dark" style="text-decoration: none; font-size: 1.3vw">Главная</a>
						</div>
						<div class="col-3 text-center">
							<a href="indexCreate.php" class="text-dark" style="text-decoration: none; font-size: 1.3vw">Создать курс</a>
						</div>
						<div class="col-3 text-center">
							<a href="catalog.php" class="text-dark" style="text-decoration: none; font-size: 1.3vw">Каталог</a>
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
						<h4><a href="checkReg.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;">Зарегистрироваться</a></h4>
						<h4 style="margin-left: 2vw"><a href="checkSign.php" class="get-started-btn text-dark" style="text-decoration: none; font-size: 0.9vw; font-weight: bold;">Войти</a></h4>
					<?php } ?>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->
	<!-- ======= Main content ======= -->
	<div class="col-12 MainBlock" style="margin-bottom: 60vh; margin-top: 10vh;">
		<div class="row">
			<div class="col-3 fixed-top" style="padding-top: 2.5vh; display: block; top: 8vh;">
				<div class="col-9 mx-auto" style="height: 71vh; background: #C4C4C4; background: linear-gradient(to top, #9DADAD,#BFBBB7); padding-left: 1vw; padding-top: 2vh;">
					<?php if ($_SESSION['id']!=null) { ?>
						<a href="comingSoon.php" style="text-decoration: none;"><h4 class="text-dark">Чат</h4></a>
						<a href="Catalog.php" style="text-decoration: none;"><h4 class="text-dark">Курсы</h4></a>
						<a href="Catalog.php" style="text-decoration: none;"><h4 class="text-dark">Рекомендуемое</h4></a>
					<?php } else {?>
						<a href="Catalog.php" style="text-decoration: none;"><h4 class="text-dark">Курсы</h4></a>
						<a href="comingSoon.php" style="text-decoration: none;"><h4 class="text-dark">Рекомендуемое</h4></a>
					<?php } ?>
				</div>
			</div>
			<div class="col-9" style="padding-left: 0; padding-right: 0; margin-left: auto">
				<div class="col-12" style="padding-bottom: 6.5vh;">
					<h2 style="font-size: 2.4vh;"><?php echo "ФИО: ".$stroka['FirstName']." ".$stroka['LastName']." ".$stroka['Patronymic']?></h2>
					<h2 style="font-size: 2.4vh;"><?php echo "Почта: ".$stroka['Mail']?></h2>
					<h2 style="font-size: 2.4vh;"><?php echo "Телефон: ".$stroka['Phone']?></h2>
					<h1>Любимые курсы</h1>
					<div class="row row-cols-2">
						<?php 
							for ($i=0; $i < mysqli_num_rows($resultSub); $i++) {
							$Subs = mysqli_fetch_assoc($resultSub);
							$author = "SELECT * FROM Users WHERE id='{$cour['UserID']}'";
							$resultUser = mysqli_query($connect, $author);
							$course = "SELECT * FROM Courses WHERE id = '{$Subs['CourseID']}'";
							$resultCourse = mysqli_query($connect, $course);
							$cour = mysqli_fetch_assoc($resultCourse);
							$avtor = mysqli_fetch_assoc($resultUser);
						 ?>
						<div class="col-6 mx-auto mt-4" style="height: 30vh;">
							<div class="row shadow-sm" style="margin-left: 0; margin-right: 0;">
								<div class="col-8" style="height: 30vh; background: #C4C4C4">
									<h1><?php echo $cour['Title'] ?></h1>
									<p><?php echo $cour['Descriptions'] ?></p>
									<h3><?php echo $avtor['FirstName'] ?></h3>
								</div>
								<div class="col-4" style="height: 30vh; background: #939393; padding-top: 1vh;">
									<img src="<?php echo $cour['img'] ?>" alt="" style="width: 100%" >
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main content -->
	<!-- ======= Footer ======= -->
	<footer class="col-12 footer" style="height: 20vh; background: #C4C4C4; position: static; bottom: 0;">
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
	</footer>
	<!-- End Footer -->
	<script type="text/javascript">
		let MainBlock = document.querySelector(".MainBlock")
		let footers = document.querySelector(".footers")
		if (MainBlock.style.height <= 100%) {
			footers.style.position = 'absolute';
			footers.style.bottom = 0;
		}
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