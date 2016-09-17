<?php

require __DIR__. '/../functions/SqlFunc.php';
require __DIR__.'/../config.php';

function viewCount($basename)
{
	mysql_select_db('img_info');
	$query = "SELECT Count FROM img_gen WHERE basename = '$basename'";
	return SqlQueryRes($query);
}

function viewCountAdd($basename)
{
	mysql_select_db('img_info');
	$query = "UPDATE img_gen SET Count=Count+1 WHERE basename = '$basename'";
	return Extension($query);

}