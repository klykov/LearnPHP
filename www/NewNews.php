<?php

require __DIR__.' /Model_News.php';


$title = $_POST['title'];
$article = $_POST['article'];


if(empty($title)||empty($article)) {
	header('Location: /index.php');
	exit;
}

$insNews = new News();
$insNews->setNews($title,$article);

header('Location: /index.php');