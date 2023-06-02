<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Регистрация</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Регистрация</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <input type="text" name="username" placeholder="Введите имя" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <input type="email" placeholder="Введите эл.почту" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <input type="password" placeholder="Введите пароль" name="password_1">
  	</div>
  	<div class="input-group">
  	  <input type="password" placeholder="Повторите пароль" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Зарегестрироваться</button>
  	</div>
  	<p>
  	<a href="login.php">Вход в аккаунт</a>
  	</p>
  </form>
</body>
</html>