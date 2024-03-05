<?php
// Connect to your MySQL database
require_once "../conn.php";

// Define the user you want to search for
$user_to_search = isset($_POST['user_to_search']) ? $_POST['user_to_search'] : '';
$user = $user_to_search; 
// Fetch data from the 'login' table for the specified user
$result = $connection->query("SELECT id, user, pass FROM login WHERE user = '$user_to_search'");

if ($result->num_rows > 0) {
// Output data
while ($row = $result->fetch_assoc()) {
    ?>
    
    <div class="table_item">
        <div class="table_item_box_id">
            <?php
                echo "<p> <b>" . $row['id'] . "</p></b>";
            ?>
        </div>
        <div class="table_item_box_name">
            <?php
                echo "<p> " . $row['user'] . "</p>";
            ?>
        </div>
        <div class="table_item_box_name">
            <?php
                echo "<p> " . $row['pass'] . "</p>";
            ?>
        </div>

        <div class="btn_cont">
            <div class="btn_block">
                <?php
                    echo "<form action='php/del_req.php' method='post'>
                    <input type='hidden' name='id' value='" . $row["id"] . "' />
                    <button class='done' type='submit'><img src='img/ok.png'></button>
                    </form>";
                ?>
            </div>
            <div class="btn_block">
                <?php
                    echo "<form action='php/del_req.php' method='post'>
                    <input type='hidden' name='id' value='" . $row["id"] . "' />
                    <button type='submit'><img src='img/trash.png' alt='Ooops....'></button>
                    </form>";
                ?>
            </div>
        </div>
    </div> <!--table_item---> 

    <?php
}
}
else {
    
    ?><div class="table_item">
    <div class="table_item_box_error">
        <?php
            echo "Lietotājs: '<b>". $user  ."</b>' nav atrasts...";
        ?>
    </div>

    <?php

}

// Close the connection
$connection->close();
?>
