<!DOCTYPE html>
<html>
<head>
	<title>News</title>
</head>
<body>
<?php 
foreach ($newsList as $value):?>
<h1><?=$value['title']?></h1>
<p><?=$value['article']?></p>
<?php endforeach;?>
<form action="NewNews.php" method="post">
<input type="text" name="title">
<input type="text" name="article">
<input type="submit" name="ok" value="Send News">
</form>
</body>
</html>