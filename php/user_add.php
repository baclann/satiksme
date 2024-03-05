<?php 
require_once ('../conn.php');

$connection = new mysqli($host, $username, $password, $database);
// Проверка подключения
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$username = mysqli_real_escape_string($connection, $_POST['username']);

$password = mysqli_real_escape_string($connection, $_POST['password']);



$sql = "INSERT INTO login (user, pass) VALUES ('$username', '$password')";

// Выполнение запроса
if ($connection->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "non-Success";
}

// Закрытие соединения
$connection->close();
?>