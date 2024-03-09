<?php 
include "conn.php";

$connection = mysqli_connect($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Kļūda pieslēdzoties pie datubāzes: " . $connection->connect_error);
}

$bus_routes = "SELECT name, id FROM bus_routes";
$stmt = $connection->prepare($bus_routes);
$stmt->execute();
$result = $stmt->get_result();

$arrroute = ['bus_1','4','bus_4a', 'bus_5','bus_6','bus_7','bus_8', 'bus_9','bus_10','bus_11','bus_12', 'bus_13','bus_14','bus_15','bus_16','bus_17','bus_18','bus_19','bus_20','bus_21','bus_21A','bus_21B','bus_71'];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id_minus = intval($row['id']) - 1;
   
        $sql_request = "SELECT * FROM `".$arrroute[$id_minus]."`ORDER BY arr_time ASC";
        $result_bus = $connection->query($sql_request);
        
        if ($result_bus) {
            ?>
   <details class="info">
    <summary><?php echo $row["name"]?></summary>

    <?php
    while ($row_bus = $result_bus->fetch_assoc()){
        $searchnames = "SELECT * FROM `route_list` WHERE id = '".$row_bus['route_id']."'";
        $names_result = $connection->query($searchnames);
        $row_names = $names_result->fetch_assoc();
        ?>

        <!-- Here you can output $row_bus data -->
        <p><?php echo date("H:i", strtotime($row_bus["arr_time"])). "  ". $row_names['route'] ?></p>
        <?php
    }
    ?>


</details>

            <?php
        } else {
            // Handle query execution errors
            echo "Error executing query: " . $connection->error;
        }
    }
} else {
    echo "No rows found in bus_routes table.";
}

?>
