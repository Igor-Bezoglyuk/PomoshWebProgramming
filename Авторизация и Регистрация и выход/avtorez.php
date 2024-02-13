<?php
$Login = filter_var(trim ($_POST['Login']), FILTER_SANITIZE_STRING);
$Password = filter_var(trim ($_POST['password']), FILTER_SANITIZE_STRING);


$Password = md5($Password."Neytryno15000");//хеширование пароля, что бы  пароль был защещён, в "скобках пишите на латинице всё что хотите "

$mysql = @new mysqli('localhost','root','','MyBazaDanih');//открываем запрос в БД

$result = $mysql->query("SELECT * FROM `Users` WHERE `Login`='$Login' AND `Password`='$Password'");//проверяет пользовательские данные, с формы в таблице" с формы $email и с таблицы email " так же и с другими значениями.
$user = $result->fetch_assoc();
if (count($user) == 0){
	echo "Такой пользователь не найден";
	exit();
}


setcookie('user', $user['name'],time() + 3600, "/");// устанавливает cooke файл временно  хранящейсяв браузере с информацией. Мы пишем имя таблицы с переменной выдуманой нами, как в принципе во всём коде.Цифры означают переюд жизни cooke указывается в секундах. 3600 с это час и умножая на сутки получаем дни , например 3600 *  24 * 30, чтобыкуки действовала на всех страницах сайта укажите "/"

$mysql->close(); // закрываем запрос в БД

header('Location: Exit.php'); // перемищает после отправки даных, на форму отправки.
 ?>