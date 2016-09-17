<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <?php include(__DIR__.'/html/mui.html');?>
	<title>Вход</title>
</head>
<body>
<header class="mui-appbar mui--z1" style="background-color:#009688;">
<div class="mui-container">
  <table width="100%">
    <tr class="mui--appbar-height">
      <td class="mui--text-title">Klykov.io</td>
    </tr>
  </table>
</div>
</header>
<div id="content-wrapper" class="mui--text-center">
<form action="loginCheck.php" method="post" >
  <legend>Вход</legend>
  <div class="mui-textfield mui--text-center">
    <input type="text" name='login' placeholder="Name">
  </div>
  <div class="mui-textfield mui--text-center">
    <input type="text" name="password" placeholder="Password">
  </div>
  <button type="submit" class="mui-btn mui-btn--raised">Login</button>
</form>
<div class="mui--text-subhead" class="err" style="margin-right:470px;">
<?php
if(isset($_SESSION['err'])) {
  echo $_SESSION['err'];
  unset($_SESSION['err']);
}
?>
</div>
</div>

<?php include(__DIR__.'/html/footer.html');?>
</body>
</html>