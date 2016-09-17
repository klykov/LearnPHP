<?php

require __DIR__. '/../models/Model_imgOrg.php';


$imgParam = $_GET['id'];
$viewCount = viewCount($imgParam);
viewCountAdd($imgParam); 

include __DIR__. '/../views/View_imgOrg.php';
//var_dump($viewCount);