<?php
session_start();
include 'func.php';
include 'time.php';

$login_enter = $_POST['login'];
$password_enter = $_POST['password'];
$datebirthday = $_POST['datebirthday'];

if ($_POST['login'] !== '' && $_POST['password'] !== '' && $_POST['datebirthday'] !== '') {

$_SESSION['checkDayBirth'] = getDateDifferent($datebirthday);
$_SESSION['ddline'] = strtotime('Now') + 86400;

    if (checkPassword($login_enter, $password_enter)) {
        $_SESSION['authorized'] = true;
        $_SESSION['currentUser'] = $login_enter;
        header('Location: index.php');
    } else {
        $_SESSION['message'] = 'Неправильно введены логин или пароль. Повторите попытку ввода данных.';
        header('Location: login.php');
    }
}
else {
    $_SESSION['message'] = 'Не введены логин, пароль или дата рождения. Повторите попытку ввода данных.';
    header('Location: login.php');
}
?>