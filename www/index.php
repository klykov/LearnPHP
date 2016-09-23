<?php

require __DIR__.' /models/Model_News.php';

$contr = (isset($_GET['contr'])) ? $_GET['contr'] : 'News';
$act = (isset($_GET['act'])) ? $_GET['act'] : 'All';

$controllerClassName =  $contr .'controller';

require __DIR__ .'/controllers/'.$controllerClassName.'.php';

$controller = new $controllerClassName;
$method = 'action'. $act;

$controller -> $method();




