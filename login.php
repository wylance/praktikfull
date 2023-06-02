<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Авторизация</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Авторизация</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" name="username" placeholder="Введите имя">
  	</div>
  	<div class="input-group">
  		<input type="password" name="password" placeholder="Введите пароль">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Войти в систему</button>
  	</div>
  	<p>
         <a href="register.php">Зарегестрироваться</a>
  	</p>
  </form>
</body>
</html>