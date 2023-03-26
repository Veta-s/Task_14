<?php
session_start();
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
	<title>Авторизация</title>
</head>
<body>
	<main> 
		<div class="box">
			<form action="enter.php" method="post">
				<label>Логин</label>
				<input type="text" name="login" placeholder="Введите свой логин">
				<label>Пароль</label>
				<input type="password" name="password" placeholder="Введите свой пароль">
				<label>Укажите свой день рождения </label>
				<input type="date" name="datebirthday"  placeholder="Введите дату рождения">
				<button type="submit">Войти</button>
				<p>
					У вас нет аккаунта? - <a href="*">Зарегистрируйтесь</a>
				</p>
				<?php
				if (isset($_SESSION['message'])){
				echo '<p class="message">'.$_SESSION['message'].'</p>';
				}
				unset($_SESSION['message']);
				?>
			</form>
		</div>
	</main>
</body>
</html>