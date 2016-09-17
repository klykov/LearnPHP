<?php
function SqlQueryRes($query)
{
	$res = mysql_query($query);
	while($row = mysql_fetch_assoc($res)){
		$list[]=$row;
	}
	return $list;
}

function Extension($query)
{
	return mysql_query($query);
}