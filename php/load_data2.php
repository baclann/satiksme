<?php
include "../conn.php";

$connection =  mysqli_connect($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

$selectedOption = $_GET["option"];
$selectedOption2 = $_GET["option2"];

$sql = "SELECT id FROM `4` WHERE route_id = '$selectedOption'";
$sql2 = "SELECT id FROM `4` WHERE route_id = '$selectedOption2'";
$result = $connection->query($sql);
$result2 = $connection->query($sql2);

if ($result->num_rows > 0 && $result2->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row2 = $result2->fetch_assoc();
        $id1 = $row['id']; // Storing the value of id from the first query
        $id2 = $row2['id']; // Storing the value of id from the second query
        
        $sqll = "SELECT * FROM `rout_name_add` WHERE id = '$id1'";
        $sqll2 = "SELECT * FROM `rout_name_add` WHERE id = '$id2'";
        $resultt = $connection->query($sqll);
        $resultt2 = $connection->query($sqll2);
        
        if (!$resultt && !$resultt2) {
            die("Ошибка выполнения запроса: " . $connection->error);
        }

        if ($resultt->num_rows > 0 && $resultt2->num_rows > 0) {
            $roww = $resultt->fetch_assoc();
            $roww2 = $resultt2->fetch_assoc();
            ?>
            <div class="route_item">
                <div class="time_block">
                    <span><?php echo $roww["arr_time"]?></span>
                </div>
                <div class="arrow_block">
                    <img src="img/arrow.png" alt="Oooops...">
                </div>
                <div class="time_block">
                    <span><?php echo $roww2["arr_time"]?></span>
                </div>
                <div class="img_block">
                    <img src="img/route.png" alt="Oooops...">
                </div>
                <div class="route_name">
                    <span><?php echo $roww["route"]?></span><br>
                    <span>Autobusa NR:<?php echo $roww["bus_num"]?></span>
                </div>
            </div>
            <?php
        } else {
            echo "Nav datu pēc izvēlētās pieturas...";
        }
    }
}

$connection->close();
?>
