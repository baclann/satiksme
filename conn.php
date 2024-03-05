<?php

// Параметры подключения к базе данных
$host = 'localhost';  // Имя хоста базы данных
$username = 'root';  // Имя пользователя базы данных
$password = 'mysql';  // Пароль пользователя базы данных
$database = 'satiksme';  // Имя базы данных

// Создаем соединение с базой данных
$connection =  mysqli_connect($host, $username, $password, $database);

// Проверка соединения на ошибки
if ($connection->connect_error) {
    die("Ошибка подключения: " . $connection->connect_error);
}


?>
