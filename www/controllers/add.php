<?php

session_start();

require __DIR__.'/../functions/file.php';
require __DIR__.'/../models/Model_img.php';

$uploadDir = __DIR__.'/../image/';
$newName = $uploadDir. basename($_FILES['image']['name']);
$fileTmpName = $_FILES['image']['tmp_name'];
$imgNewName = $_POST['imgName'];
$imgBaseName = $_FILES['image']['name'];



if(empty($imgNewName)) {
	header('Location: /photoGalery/controllers/galery.php');
	$_SESSION['imgError'] = 'Неверное имя изображения!';
	exit;
}

if(!CheckFormatImg($fileTmpName)){
	$_SESSION['imgError'] = 'Неверный формат изображения!';
	header('Location: /photoGalery/controllers/galery.php');
	exit;
}

if (CheckLoadImg($fileTmpName, $newName)) {
	if(img_Insert($imgNewName,$imgBaseName)) {
		header('Location: /photoGalery/controllers/galery.php');
		exit; 
	} else {
		echo 'Gavno';
	}
} 