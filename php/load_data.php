<?php
// Подключение к базе данных (замените значения на свои)
include "../conn.php";

$connection =  mysqli_connect($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

// Получение опции из запроса
$selectedOption = $_GET["option"];

// Выполнение SQL-запроса в зависимости от выбранной опции
$sql = "SELECT * FROM `4` WHERE route_name = '$selectedOption'";  // Обратные кавычки добавлены вокруг имени таблицы
$result = $connection->query($sql);

// Проверка успешности выполнения запроса
if (!$result) {
    die("Ошибка выполнения запроса: " . $connection->error);
}

// Обработка результатов запроса
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>" . $row["route_name"] . " " . $row["arr_time"];
        // Добавьте другие колонки по мере необходимости
    }
} else {
    echo "Nav datu pēc izvēlētās pieturas...";
}

// Закрытие соединения с базой данных
$connection->close();
?>
