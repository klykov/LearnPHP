<?php
session_start();
require __DIR__.'/../models/Model_login.php';


$login = $_POST['login'];
$password = $_POST['password'];
$location = 'Location: /photoGalery/controllers/login.php';

if(empty($login) || empty($password)) {
	$_SESSION['err'] = 'Пустой логин или пароль!';	
	header($location);
	exit;
}

if(!isUser($login, $password)) {
	$_SESSION['err'] = 'Неверный логин или пароль!';
	header($location);
	exit;
}

rememberUser($login);
header('Location: /photoGalery/controllers/galery.php');




