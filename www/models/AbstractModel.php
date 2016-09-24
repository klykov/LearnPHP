<?php

abstract class AbstractModel 
{
	protected static $table;
	protected static $class;

	public static function getAll()
	{
		$db = new DataBaseWork('img_info');
		$sql = 'SELECT * FROM '. static::$table;
		return $db->selectData($sql, static::$class);
	}

	public static function getOne($id)
	{
		$db = new DataBaseWork('img_info');
		$sql = 'SELECT * FROM '. static::$table .' WHERE id='.$id;
		return $db->selectDataOne($sql, static::$class);

	}

	public static function set($title, $article)
	{	
		$db = new DataBaseWork('img_info');
		return $db-> updateInsertData("INSERT INTO ".static::$table." 
										(title, article) 
										VALUES 
										('$title', '$article')");

	}
}