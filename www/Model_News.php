<?php

class DataBaseWork 
{
	public function __construct($server,$user,$password,$db)
	{
		mysql_connect($server, $user, $password);
		mysql_select_db($db);
	}

	public function selectData($querySelect)
	{	
		$res = mysql_query($querySelect);
		while($row = mysql_fetch_assoc($res)){
			$data[] = $row;
		}
		return $data;
	}
	

	public function updateInsertData($queryUpIns){
		return mysql_query($queryUpIns);
	}

}