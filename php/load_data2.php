<?php
include "../conn.php";

$connection =  mysqli_connect($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

$selectedOption = $_GET["option"];
$selectedOption2 = $_GET["option2"];
$fill_select = $_GET["fillselect"];

$sql = "SELECT id FROM `".$fill_select."` WHERE route_id = '$selectedOption'";
$sql2 = "SELECT id FROM `".$fill_select."` WHERE route_id = '$selectedOption2'";
$result = $connection->query($sql);
$result2 = $connection->query($sql2);

if ($result->num_rows > 0 && $result2->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row2 = $result2->fetch_assoc();
        $id1 = $row['id']; // Storing the value of id from the first query
        $id2 = $row2['id']; // Storing the value of id from the second query
        
        $sqll = "SELECT * FROM `".$fill_select."` WHERE id = '$id1'";
        $sqll2 = "SELECT * FROM `".$fill_select."` WHERE id = '$id2'";
        $resultt = $connection->query($sqll);
        $resultt2 = $connection->query($sqll2);
        
        if (!$resultt && !$resultt2) {
            die("Ошибка выполнения запроса: " . $connection->error);
        }


        if ($resultt->num_rows > 0 && $resultt2->num_rows > 0) {
            $roww = $resultt->fetch_assoc();
            $roww2 = $resultt2->fetch_assoc();
            $route_name = "SELECT `route` FROM `route_list` WHERE id = ".$roww["route_id"];
            $route_name2 = "SELECT `route` FROM `route_list` WHERE id = ".$roww2["route_id"];
            $name_result1 = $connection->query($route_name);
            $name_result2 = $connection->query($route_name2);
            $name_roww1 = $name_result1->fetch_assoc();
            $name_roww2 = $name_result2->fetch_assoc();
            ?>




                        <button style="float: right; margin-top:40px; margin-left:10px;"><i class="fa-solid fa-repeat"></i></button>
              <details class="info">
          
              <summary>

                    
            <p><?php

                            if(strtotime($roww["arr_time"]) < strtotime($roww2["arr_time"])){
                                

            echo date("H:i", strtotime($roww["arr_time"])) . "  <i style='font-size:10px; padding-left:10px; padding-right:10px; padding-top:3px' class='fa-solid fa-arrow-right'></i>  " . date("H:i", strtotime($roww2["arr_time"]));
                                          }
                            else {
                                echo date("H:i", strtotime($roww2["arr_time"])) . "  <i style='font-size:10px; padding-left:10px; padding-right:10px; padding-top:3px' class='fa-solid fa-arrow-right'></i>  " . date("H:i", strtotime($roww["arr_time"]));
                            }
                       
                            ?>   </p> <p> <?php 
                                if(strtotime($roww["arr_time"]) < strtotime($roww2["arr_time"])){
                                    echo $name_roww1['route'] . " - " . $name_roww2['route'];  
                                }   else{
                                    echo $name_roww2['route'] . " - " . $name_roww1['route'];   
                                }
                                ?> </p>
           
            <p>Autobusa NR:  <?php echo $roww["bus_num"]?></p>
              </summary>
            
              </details>
       
            <?php
        } else {
            echo "Nav datu pēc izvēlētās pieturas...";
        }
    }
}

$connection->close();
?>
