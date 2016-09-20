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

abstract class Article 
{
	public $title;
	public $text;
}

class News extends Article 
{
	public $db;

	public function __construct(){

		 $this->db = new DataBaseWork('localhost','root','','img_info');
	}

	public function getNews()
	{
		return $this->db->selectData("SELECT title, article FROM news");
	}

	public function setNews($title, $article)
	{
		return $this->db-> updateInsertData("INSERT INTO 'news'
									('title', 'article') 
									VALUES 
									('".$title."', '".$article."')");

	}
}