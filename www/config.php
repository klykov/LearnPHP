<?php
define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '');

$link = mysql_connect(SERVER,USER,PASSWORD) or die(mysql_error());