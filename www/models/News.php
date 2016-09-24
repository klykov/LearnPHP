<?php

require_once __DIR__.' /../subFunctions/DataBaseWork.php';

class News extends AbstractModel
{
	public $id;
	public $title;
	public $article;

	protected static $table = 'news';
	protected static $class = 'News';

}