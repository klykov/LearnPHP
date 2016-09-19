<?php

require __DIR__.' /Model_News.php';

$newArticle = new DataBaseWork('localhost','root','','img_info');


$title = $_POST['title'];
$article = $_POST['article'];

if(empty($title)||empty($article)) {
	header('Location: /index.php');
	exit;
}

$newArticle -> updateInsertData("INSERT INTO `news`(`title`, `article`) VALUES ('$title','$article')");


header('Location: /index.php');