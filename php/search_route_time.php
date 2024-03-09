<?php
// // Подключение к базе данных
// include "../conn.php";

// // Create connection
// $conn =  mysqli_connect($host, $username, $password, $database);


// // Проверка соединения
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Функция для выполнения запроса и получения результатов
// function searchInTable($table) {
//     global $conn;

//     // Замените это на реальные поля и условия поиска
//     $sql = "SELECT * FROM `$table` WHERE arr_time >= '12:05'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         // Вывод данных из таблицы
//         while($row = $result->fetch_assoc()) {
//             echo "id: " . $row["id"]. " - Laiks: " . $row["arr_time"]. "<br>";
//         }
//     } else {
//         echo "0 results";
//     }
// }

// // Вызываем функцию для поиска в обеих таблицах
// searchInTable('4');
// searchInTable('bus_1');

// // Закрываем соединение с базой данных
// $conn->close();


// Подключение к базе данных
include "../conn.php";

// Create connection
$conn =  mysqli_connect($host, $username, $password, $database);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Функция для выполнения запроса и получения результатов
function searchInTable($table, $time) {
    global $conn;

    // Экранируем входные данные, чтобы предотвратить SQL-инъекции
    $time = mysqli_real_escape_string($conn, $time);

    // Замените это на реальные поля и условия поиска
    $sql = "SELECT * FROM `$table` WHERE arr_time > '$time' ORDER BY arr_time ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Вывод данных из таблицы
        while($row = $result->fetch_assoc()) {
            ?>

            <div class="route_item">
                <div class="time_block">
                    <span><?php echo date("H:i", strtotime($row["arr_time"]))?></span>
                </div>
                <div class="arrow_block">
                    <img src="img/arrow.png" alt="Oooops...">
                </div>
                <div class="time_block">
                    <span><?php echo date("H:i", strtotime($row["arr_time"]))?></span>
                </div>
                <div class="img_block">
                    <img src="img/route.png" alt="Oooops...">

                </div>
                <span>Route ID: <?php echo $row["route_id"]; ?> /  </span> 
                    <span>Bus Number: <?php echo $row["bus_num"]; ?></span>
            </div>
            <?php
        }
        
    } else {
        echo "0 results";
    }
}

// Проверяем, было ли отправлено значение времени

    // $search_time = $_GET['currentTime'];
    $search_time = '2:05';
    echo "///// Current Laiks:" . $search_time . "//////";
    // Вызываем функцию для поиска в обеих таблицах
    searchInTable('4', $search_time);
    searchInTable('bus_1', $search_time);




// Закрываем соединение с базой данных
$conn->close();

?>
