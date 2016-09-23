<!DOCTYPE html>
<html>
<head>
	<title>News</title>
</head>
<body>
<?php 
foreach ($items as $value):?>
<h1><a href='index.php?contr=News&act=One&id=<?=$value->id?>'><?=$value->title?></a></h1>
<?php endforeach;?>
</form>
</body>
</html>