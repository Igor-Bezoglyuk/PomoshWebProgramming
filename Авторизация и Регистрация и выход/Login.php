
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form id="Avtorizasia" name="Forma" method="POST" action="avtorez.php">
    <label>Логин:</label><br><br>
	<input id="Avtorizasiainput" type="text" name="Login" placeholder="Логин"><br><br>
	<label>Пароль:</label><br><br>
	<input id="Avtorizasiainput" type="password" name="password" placeholder="Пароль"><br><br>
	<input id="AvtorizasiaKnopka" type="submit" name="Knopka" value="Войти">	
</form>
<p>
  У вас нет акаунта? - <a href="Regis.php">Зарегистрируйтесь</a>	
</p>
</body>
</html>