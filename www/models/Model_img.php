<?php

require __DIR__. '/../functions/SqlFunc.php';
require __DIR__.'/../config.php';

function img_getAll() 
{
	mysql_select_db('img_info');
	$query = "SELECT basename FROM img_gen ORDER BY Count DESC";
	return SqlQueryRes($query);
}

function img_Insert($name, $basename)
{
	mysql_select_db('img_info');
	$query = "INSERT INTO img_gen
			  (name, basename)
			  VALUES 
			  ('".$name."', '".$basename."')
			 ";
	return Extension($query);
}
