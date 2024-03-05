<?php
session_start(); // Начало сессии
require_once("../conn.php");

$connection = new mysqli($host, $username, $password, $database);
// Проверка подключения
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Получение данных из формы
$username = mysqli_real_escape_string($connection, $_POST['login']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

// Использование подготовленного запроса
$stmt = $connection->prepare("SELECT * FROM login WHERE user = ? AND pass = ?");
if (!$stmt) {
    die("Error in SQL query: " . $connection->error);
}
$stmt->bind_param("ss", $username, $password);

// Выполнение запроса
$stmt->execute();

// Получение результатов
$result = $stmt->get_result();

// Проверка наличия пользователя в базе данных
if ($result->num_rows > 0) {
    $_SESSION['login'] = $username;
    setcookie('auth',$username, time() + 3600, "/");
    echo "Success";
    die();
} else {
    echo "non-Success";
}

// Закрытие соединения
$stmt->close();
$connection->close();
?>
