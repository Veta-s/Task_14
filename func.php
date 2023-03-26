<?php

// Возвращаем массив всех пользователей
function getUsersList() {
    include 'users.php';
    return $users;
};

// Проверка существования пользователя
function existsUser($login) {
    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user['login'] === $login) {
            return true;
        }
    }
    return false;
}

// Проверка на существование пользователя и правильность ввода пароля
function checkPassword($login, $password) {
    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user['login'] === $login) {
            if (password_verify($password, $user['password'])) {
                return true;
            }
        }
    }
    return false;
}

// Возвращает имя вошедшего на сайт пользователя
function getCurrentUser() {
    if (isset($_SESSION['currentUser']) && !empty($_SESSION['currentUser'])) {
        return $_SESSION['currentUser'];
    } else return null;
}

// Ведет подсчет кол-ва дней до Дня Рождения и если это сегодня, выведет акцию
function getDateDifferent($date_birthday) {
    $DateToday = new DateTime(date('d.m.Y')); 
    $DateBirth = new DateTime($date_birthday); 
    $DateBirth->setDate($DateToday->format('Y'), $DateBirth->format('m'), $DateBirth->format('d')); 
    print_r($DateToday);
    $different = $DateBirth->diff($DateToday); 
    if ($different->invert) 
    {
        return $different->days;  
    }                               
    else {   
        if ($different->days === 0){    
            return $different->days;
        }
        else { 
        $DateBirth->modify('+1year');   
        $different = $DateBirth->diff($DateToday); 
        return $different->days;
        }
    } 
}
?>