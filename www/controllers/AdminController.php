<?php

class AdminController {

	public function actionSet()
	{
		include __DIR__.'/../views/insertNew.php';
		
		if(isset($_POST['title']) && isset($_POST['article'])) {
			$title = $_POST['title'];
			$article = $_POST['article'];
		}

		if(!empty($title)&&!empty($article)) {
			News::set($title, $article);
		}
		
		return;
	}
}