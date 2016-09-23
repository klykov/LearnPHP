<?php

require __DIR__ . ' /../config.php';

class DataBaseWork 
{
	public function __construct($db)
	{
		mysql_select_db($db);
	}

	public function selectData($querySelect, $class='stdClass')
	{	
		$res = mysql_query($querySelect);
		while($row = mysql_fetch_object($res, $class)){
			$data[] = $row;
		}
		return $data;
	}

	public function selectDataOne($query, $class='stdClass')
	{
		return $this->selectData($query,$class)[0];
	}
	

	public function updateInsertData($queryUpIns)
	{
		return mysql_query($queryUpIns);
	}

}