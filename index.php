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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style>
		
	</style>
	<!-- Script only -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="assets/script/script.js"></script>
	<script type="text/javascript">
</script>  
</head>
<body>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top col-12 border-bottom" style="height: 8vh; background: white">
		<div class="col-12	">
			<div class="row" style="margin-left: 0; margin-right: 0;">
				<!-- Колонка логотипа -->
				<div class="col-2" style="height: 8vh; padding-top: 1vh">
					<img id="logo" class="" src="asset/img/logo.svg" id="logoMain" alt="" style="height: 6vh; margin-left: 0.3vw;">
				</div>
				<!-- Средняя колонка -->
				<div class="col-8" style="height: 8vh; padding-top: 2vh;">
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
	<!-- ======= Main ======= -->
	<div class="col-12" style="padding-bottom: 20vh;">
		<!-- Carousel -->
		<div class="col-12" style="margin-top: 8vh; background: #BFBBB7">
			<div id="carouselExampleIndicators" class="carousel slide shadow-lg" data-ride="carousel" style="height: 80vh;">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row" style="padding-left: 1vw; padding-right: 0; padding-top: 1vh;">
							<img src="asset/img/banner.svg" class="col-6" alt="First slide">
							<div class="col-5 text-center" style="height: 40vh; background: #939393; position: relative; left: -10vw; top: 30vh; padding-top: 10vh;">
								<h4>Lectady</h4>
								<p class="col-8 mx-auto">Присоединяйся к нам уже прямо сейчас! Собирай средства для создания контента и радуй своих зрителей интересными уроками!</p>
								<button onclick="Create()" class="btn create" style="background: #4D433A; color: white;">Создать проект</button>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row" style="padding-left: 1vw; padding-right: 0; padding-top: 1vh;">
							<img src="asset/img/banner.svg" class="col-6" alt="First slide">
							<div class="col-5" style="height: 40vh; background: #939393; opacity: 50%; position: relative; left: -10vw; top: 30vh;">
								<button onclick="Create()" class="btn create" style="background: #4D433A; color: white; position: absolute; bottom: 5vh; left: 40%;">Создать проект</button>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row" style="padding-left: 1vw; padding-right: 0; padding-top: 1vh;">
							<img src="asset/img/banner.svg" class="col-6" alt="First slide">
							<div class="col-5" style="height: 40vh; background: #939393; opacity: 50%; position: relative; left: -10vw; top: 30vh;">
								<button onclick="Create()" class="btn create" style="background: #4D433A; color: white; position: absolute; bottom: 5vh; left: 40%;">Создать проект</button>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only" style="font-size: 1vw">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only" style="font-size: 1vw">Next</span>
				</a>
			</div>
		</div>
		<!-- Line -->
		<div class="col-12 text-center" style="height: 20vh; margin-top: 15vh; background: #BFBAB7">
			<h1>Что такое краудфандинг?</h1>
			<p class="col-8 mx-auto">- коллективное сотрудничество людей (доноров), которые добровольно объединяют свои деньги или другие ресурсы вместе, как правило, через Интернет, чтобы поддержать усилия других людей или организаций (реципиентов). Сбор средств может служить различным целям — помощи пострадавшим от стихийных бедствий, поддержке со стороны болельщиков, поддержке политических кампаний.</p>
		</div>
		<!-- Block -->
		<div class="col-11 mx-auto" style="height: 60vh; margin-top: 15vh; background: #9DADAD;">
			<div class="row" style="margin-left: 0; margin-right: 0;">
				<div class="col-3" style="height: 70vh; position: relative; top: -6vh; left: 1vw; background-image: url(asset/img/right1.png); background-size: 100% 100%;"></div>
				<div class="col-6 text-center" style="height: 70vh; padding-top: 10	vh;">
					<h4 class="col-10 mx-auto" style="font-weight:;">Ты блоггер? Преподаешь на бесплатных площадках? У тебя нет средств для создания контента, о котором тебя просят твои зрители? Наш сервис Lectudy поможет тебе! Регестрируйся, собирай средства для создания уроков и выкладывай их прямо сюда!</h4>
					<h4 class="col-10 mx-auto" style="margin-top: 12vh;">Если ты пользователь, который хочет найти полезные курсы или же помочь создателю с реализацией уроков, то регестрируйся и помогай любимым контент мейкерам!</h4>
				</div>
				<div class="col-3" style="height: 70vh; position: relative; top: 6vh; right: 1vw; background-image: url(asset/img/left1.png); background-size: 100% 100%;"></div>
			</div>
		</div>
		<!-- Recomendation carousel -->
		<div class="col-12" style="margin-top: 24vh;">
			<div id="carouselExampleIndicators" class="carousel slide col-11 mx-auto" data-ride="carousel" style="height: 40vh;">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row row-cols-4" style="padding-left: 0; padding-right: 0;">
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block1.png" alt="" class="col-12">
							</div>
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block2.png" alt="" class="col-12">
							</div>
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block3.png" alt="" class="col-12">
							</div>
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block4.png" alt="" class="col-12">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row row-cols-4" style="padding-left: 0; padding-right: 0;">
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block1.png" alt="" class="col-12">
							</div>
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block2.png" alt="" class="col-12">
							</div>
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block3.png" alt="" class="col-12">
							</div>
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block4.png" alt="" class="col-12">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row row-cols-4" style="padding-left: 0; padding-right: 0;">
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block1.png" alt="" class="col-12">
							</div>
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block2.png" alt="" class="col-12">
							</div>
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block3.png" alt="" class="col-12">
							</div>
							<div class="border mx-auto" style="width: 20vw; height: 40vh; background: #939393;padding-left: 0; padding-right: 0;">
								<img src="asset/img/block4.png" alt="" class="col-12">
							</div>
						</div>
					</div>
				</div>
				<!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only" style="font-size: 1vw">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only" style="font-size: 1vw">Next</span>
				</a> -->
			</div>
		</div>
	</div>
	<!-- End Main -->
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/path/to/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		function Exit() {
			window.location.href = 'index.php';
		}
		function Create() {
			window.location.href = 'indexCreate.php';
		}
	</script>
</body>
</html>