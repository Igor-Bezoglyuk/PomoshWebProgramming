<?php
if (isset($_POST['name']) && isset($_POST['EMail'])){

    // Переменные с формы
    $name = $_POST['name'];
    $email = $_POST['EMail'];
    
    // Параметры для подключения
    $host = "localhost"; 
    $user = "root"; // Логин БД
    $password = ""; // Пароль БД
    $base = 'MyBazaDanih'; // Имя БД
    $table = "people"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = @new mysqli($host,$user,$password,$base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
     header("Location: index.php"); // Направляет пользователя после отправки даных в БД, адресс вводите сами.

    $result = $mysqli->query("INSERT INTO ".$table." (name,EMail) VALUES ('$name','$email')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
}
?>