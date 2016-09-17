<?php
session_start();
if(isset($_GET['exit'])) {
	setcookie('login', 0, time()-999999);
	header('Location: /photoGalery/controllers/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include(__DIR__.'/html/mui.html');?>
	<title>Галерея</title>
</head>
<body>
<?php include(__DIR__.'/html/header.html');?>
<header class="mui-appbar mui--z1" style="background-color:#009688;">
<div class="mui-container">
  <table width="100%">
    <tr class="mui--appbar-height">
      <td class="mui--text-title">Klykov.io</td>
       <?php include(__DIR__.'/html/button.html');  ?>
    </tr>
  </table>
</div>
</header>
<div class="mui-container mui--text-center" style="padding-top:100px;">
<div class="mui--text-subhead">
<?php 
if (!empty($_SESSION['imgError'])) {
  	echo $_SESSION['imgError'];
  	unset($_SESSION['imgError']);
} ?>
</div>
<button class="mui-btn mui-btn--primary" style="background-color:#009688;" onclick="activateModal()">Добавить картинку</button>
</br>
</br>
</div>
<?php 
if(!empty($imgList))  {
foreach ($imgList as $basename) {
  	foreach ($basename as $key => $value) :
    		if($key=='basename'):?>
	<div class="mui-container mui--text-center">
		<a href="imgOrg.php?id=<?=$value?>">
			<img style="width:600px;height:400px;" src='/image/<?=$value?>'>
		</a>
	</div>
</br>
<?php 
  			endif;
	   endforeach;
    }
  } else {
  echo 'В базе нет изображений';
  }?>

<?php include(__DIR__.'/html/footer.html');?>
</body>
</html>