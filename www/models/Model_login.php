<?php

require __DIR__. '/../functions/SqlFunc.php';
require __DIR__.'/../config.php';


function getUsersInfo(){
	mysql_select_db('users_info');
	$query = "SELECT login, password FROM gen_info";
	return SqlQueryRes($query);
}

function isUser($login, $password) {
	$usersInfo = getUsersInfo();
	foreach ($usersInfo as $userArr) {
		if ($userArr['login'] == $login
			&& $userArr['password']==$password) {
			return true;
		}
	}
	return false;
}

function rememberUser($login){
	setcookie('login', $login, time()+999999);
}

function exitUser() {
	setcookie('login', 0, time()-999999);
}