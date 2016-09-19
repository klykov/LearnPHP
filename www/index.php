<?php

require __DIR__.' /Model_News.php';

$news = new DataBaseWork('localhost','root','','img_info');

$newsList = $news -> selectData("SELECT title, article FROM news");

include (__DIR__. '/View_News.php');



