<?php
session_start();

$users = [
	['login' => 'Bart', 'password' => password_hash(123,PASSWORD_DEFAULT)], 
	['login' => 'Liza', 'password' => password_hash(321,PASSWORD_DEFAULT)], 
	['login' => 'Maggie', 'password' => password_hash(000,PASSWORD_DEFAULT)],
];

?>