<?php 
include "../conn.php";

$connection = mysqli_connect($host, $username, $password, $database);

$bool = isset($_POST['bool']) ? $_POST['bool'] : null;
$curr_time = $_POST['cur_time'];

if ($connection->connect_error) {
    die("Kļūda pieslēdzoties pie datubāzes: " . $connection->connect_error);
}

$bus_routes = "SELECT name, id FROM `bus_routes`";
$stmt = $connection->prepare($bus_routes);
$stmt->execute();
$result = $stmt->get_result();

$arrroute = ['bus_1','4','bus_4a', 'bus_5','bus_6','bus_7','bus_8', 'bus_9','bus_10','bus_11','bus_12', 'bus_13','bus_14','bus_15','bus_16','bus_17','bus_18','bus_19','bus_20','bus_21','bus_21A','bus_21B','bus_71'];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id_minus = intval($row['id']) - 1;
        if($bool== 'true'){
            $sql_request = "SELECT * FROM `".$arrroute[$id_minus]."` WHERE `back` = `0` ORDER BY arr_time ASC";
        }
        else if($bool== 'false') {
            $sql_request = "SELECT * FROM `".$arrroute[$id_minus]."` WHERE `back` = `1` ORDER BY arr_time ASC";
        }
        else {
            $sql_request = "SELECT * FROM `".$arrroute[$id_minus]."` ORDER BY arr_time ASC";
        }

        $result_bus = $connection->query($sql_request);
        
        if ($result_bus) {
        $my_num = 0;
        $my_num1 = 0;

        while ($row_bus = $result_bus->fetch_assoc()){
            $searchnames = "SELECT * FROM `route_list` WHERE id = '".$row_bus['route_id']."'";
            $names_result = $connection->query($searchnames);
            $row_names = $names_result->fetch_assoc();

            if($my_num < 1)
            {
                if($bool== 'true'){
                    $chbl = 'false';
                }
                else {
                    $chbl = 'true'; 
                }
                ?>
                    <button id = "btn<?php echo $row['id']?>" class= "pudzena" value = "<?php echo $chbl?>" style="float: right; margin-top:25px; " onclick="turnover(this,<?php echo $row['id']?>)"><i class="fa-solid fa-repeat"></i></button>
                    <details id = "listid<?php echo $row['id']?>" class="info">
                    <summary class="first"><div class="n"><b><?php echo $row_bus["bus_num"] ?></b></div> <?php echo $row["name"]?></summary>
                        <details class="secondary">   
                        <summary class="second">Pagājušie maršruti</summary>
           
                <?php
            }
        $my_num++; 

        if(strtotime($row_bus['arr_time']) <= strtotime($curr_time)){
          
            ?>
 
                <p><?php echo date("H:i", strtotime($row_bus["arr_time"])). "  ". $row_names['route']?></p>
            <?php
        } else {
            if($my_num1 < 1) {
                ?>
                    </details>
                <?php
            } else {
                ?>
                    <p><?php echo date("H:i", strtotime($row_bus["arr_time"])). "  ". $row_names['route']?></p>
                <?php
            }
            
            $my_num1++;
        }
        ?>
          
        
        <?php
    }
    ?>
     </details>
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
