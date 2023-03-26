<?php
session_start();
include 'func.php';
include 'time.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Farsan&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
	<title>SPA</title>
</head>
<body>
	<header class="header">
		<div class="header-line">
			<div class="header-logo">
				<a href="index.php">
					<img src="images/logo.png">
				</a>
				<a href="index.php">
					<span class="name-logo">
						FARFOR
					</span>
				</a>
			</div>
			<div class="nav">
				<a class="nav-item" href="index.php">ГЛАВНАЯ</a>
				<a class="nav-item" href="#">О НАС</a>
				<a class="nav-item" href="#">ПРАЙС</a>
			</div>
			<div class="phone">
				<div class="phone-holder">
					<div class="phone-img">
						<img src="images/phone.png" alt="">
					</div>
					<div class="number">
						<a href="#">+9-999-999-99-99</a>
					</div>	
				</div>
				<div class="phone-txt">
					Телефон для записи
				</div>
			</div>
			<div class="btn">
				<?php
					if (isset($_SESSION['authorized'])) {
						echo '<div class="login">
						<a class="login_text">Приветствуем Вас, ' . getCurrentUser() . '</a> <br><br>
						<a class="log_out" href="logout.php">Выйти из профиля</a>
						</div>';
					} else {
						echo '<div class="login">
						<a class="sign_in" href="login.php">Войти</a>
					</div>';
					}
				?>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="discount24">
			<div class="timer">
				<?php
					if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
					echo '<p class = "user">Здравствуйте,' . ' ' . getCurrentUser() . '!</p>';
					if ($_SESSION['checkDayBirth'] > 0) {
						echo '
						<div>
						<p>До вашего дня рождения осталось:' . ' ' . $_SESSION['checkDayBirth'] . ' ' . 'дней (-ень)</p>
						</div>';
					} else if ($_SESSION['checkDayBirth'] === 0) {
						echo '
						<div>
						<p> Сегодня действует персональная скидка 20% в честь Вашего Дня Рождения! Поздравляем!</p>
						</div>';
					}
					};
				?>
				<?php if($salet) { ?>
				<div class="sale">
					<div>Ваша персональная скидка 2% на все закончится через: <div class="red-txt"> <?php echo $hours . " часов ". $minutes ." минут ". $seconds ." секунд"; ?></div></div>
				</div> 
				<?php } ?>
			</div>
		</div>
		<div class="service-holder">
			<div class="service-txt">
				<div class="service-title">
					Наши услуги
				</div>
				<div class="service-desk">
					Lorem ipsum dolor sit amet, <span class="red-txt">отдых для всей семьи</span> consectetur adipisicing elit. Fuga facilis exercitationem natus, magni eligendi eos aut rem nam error provident libero ullam sint voluptate earum illo cumque ut dolorum nostrum. Lorem ipsum dolor sit, amet <span class="red-txt">солярий</span> consectetur adipisicing elit. Provident, fugit dolor cum placeat laudantium iusto dicta aspernatur ea consequatur <span class="red-txt">массаж</span> unde ipsa temporibus doloremque expedita sequi perferendis qui assumenda nobis magni? Lorem ipsum dolor, sit amet <span class="red-txt">все виды косметических и косметологических услуг</span> consectetur adipisicing elit. Nobis, temporibus, qui saepe vel provident earum suscipit illo sint optio, facere deserunt enim consequuntur fugiat perferendis id adipisci eaque molestias vero.
				</div>
			</div>
			<div class="service-img">
				<img class="geometry-img" src="images/geometry.jpg" alt="">
				<img class="couple-img" src="images/couple.jpg" alt="">
				<img class="girl-img" src="images/girl.jpg" alt="">
			</div>
		</div>
	</main>
	<footer class="footer">
		Copyright ©️ 2023 FARFOR
	</footer>
</body>
</html>