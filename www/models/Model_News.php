<?php

require_once __DIR__.' /../subFunctions/DataBaseWork.php';

class News 
{
	public $id;
	public $title;
	public $article;

	static public function getAll()
	{
		$db = new DataBaseWork('img_info');
		return $db->selectData("SELECT id, title, article FROM news",'News');
	}

	static public function getOne($id)
	{
		$db = new DataBaseWork('img_info');
		return $db->selectDataOne("SELECT title, article FROM news WHERE id='$id' ",'News');

	}

	static public function set($title, $article)
	{	
		$db = new DataBaseWork('img_info');
		return $db-> updateInsertData("INSERT INTO news
									(title, article) 
									VALUES 
									('$title', '$article')");

	}

}