<?php

if (isset($_COOKIE['login'])) {
	header('Location: /photoGalery/controllers/galery.php');	
}

include __DIR__.'/../views/View_login.php';




