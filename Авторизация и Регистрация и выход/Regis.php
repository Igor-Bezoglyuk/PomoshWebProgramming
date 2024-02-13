<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Форма регистрации</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form id="Registr" name="Forma" method="POST" action="chek.php" enctype="multipart/form-data"><!--enctype="multipart/form-data" позволяет передовать файлы через форму-->
	<label>ФИО:</label><br><br>
	<input id="Registrinput" type="text" name="Full_Name" placeholder="Логин"><br><br>
	<label>Логин:</label><br><br>
	<input id="Registrinput" type="text" name="login" placeholder="Логин"><br><br>
	<label>Email:</label><br><br>
	<input id="Registrinput" type="email" name="email" placeholder="Email"><br><br>
	<input type="file" name="avatar"><br><br> <!--Тег для Аватара (картнки) нужно писать в Типе  файла слово file-->
	<label>Пароль:</label><br><br>
	<input id="Registrinput" type="password" name="password" placeholder="Пароль"><br><br>
	<label>Повтаврите пароль:</label><br><br>
	<input id="Registrinput" type="password" name="password_confirm" placeholder="Подтвердите пароль"><br><br>
	<input id="RegistrKnopka" type="submit" name="Knopka" value="Отправить">	
</form><br>
<p>
  У вас уже есть акаунт? - <a href="Index.php">Авторизируйтесь</a>	
</p>

	<?php 
	  if ($_SESSION['message']) {
	  	echo'<p id="msg" style="color:red;">'. $_SESSION['message'] .'</p>';
	  }
      unset($_SESSION['message']);
	?>

</body>
</html>