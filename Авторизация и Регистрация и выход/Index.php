<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Форма регистрации</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form id="Registr" name="Forma" method="POST" action="chek.php">
	<label>Логин:</label><br><br>
	<input id="Registrinput" type="text" name="login" placeholder="Логин"><br><br>
	<label>Email:</label><br><br>
	<input id="Registrinput" type="email" name="email" placeholder="Email"><br><br>
	<label>Пароль:</label><br><br>
	<input id="Registrinput" type="password" name="password" placeholder="Пароль"><br><br>
	<input id="RegistrKnopka" type="submit" name="Knopka" value="Отправить">	
</form><br>
<p>
  У вас уже есть акаунт? - <a href="Login.php">Авторизируйтесь</a>	
</p>
</body>
</html>