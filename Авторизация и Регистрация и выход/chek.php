<?php
$Login = filter_var(trim ($_POST['login']), FILTER_SANITIZE_STRING);
$Email = filter_var(trim ($_POST['email']), FILTER_SANITIZE_STRING);
$Password = filter_var(trim ($_POST['password']), FILTER_SANITIZE_STRING);

if (mb_strlen($Login) < 5 || mb_strlen($Login) > 90){
  echo "Недопустимая длина Логина ";
  exit();
}
if (mb_strlen($Email) < 3 || mb_strlen($Email) > 90){
  echo "Недопустимая длина E-Mail ";
  exit();
}

else if (mb_strlen($Password) < 2 || mb_strlen($Password) > 15){
  echo "Недопустимая длина пароля от (2 до 15 символов) ";
  exit();
}

$Password = md5($Password."Neytryno15000");//хеширование пароля, что бы  пароль был защещён, в "скобках пишите на латинице всё что хотите "

$mysql = @new mysqli('localhost','root','','MyBazaDanih');//открываем запрос в БД
$mysql->query("INSERT INTO `Users`(`Login`,`Email`,`Password`) VALUES('$Login','$Email','$Password')");// Пишем SQL языке в скопках, в  скопках пишем имя таблицы и столбцы в таблице, обязательно выделяем `` скопками, после Value можно выделять обычными ''
$mysql->close(); // закрываем запрос в БД

header('Location: Login.php'); // перемищает после отправки даных, на форму отправки.
?>