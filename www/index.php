<?php

require __DIR__.' /Model_News.php';

$newsListGet = new News();

$newsList = $newsListGet -> getNews();
//var_dump($newsList);

include (__DIR__. '/View_News.php');



