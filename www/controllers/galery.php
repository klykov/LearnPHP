<?php

require __DIR__.' /../models/Model_img.php';

$imgList = img_getAll();

if(!isset($_COOKIE['login'])){
	header('Location: /photoGalery/controllers/login.php');
}

include __DIR__.'/../views/View_img.php';
