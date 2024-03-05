<?php
            // Connect to your MySQL database
            require_once "../conn.php";

            // Fetch data from the 'reviews' table
            $result = $connection->query("SELECT id, user, pass FROM login");

            // Output data
            while ($row = $result->fetch_assoc()) {
                ?>
            
            <div class="table_item">
                <?php
                ?>
                <?php
                    ?>
                    <div class="table_item_box_id">
                          <?php
                               echo "<p> <b>" . $row['id'] . "</p></b>";
                          ?>

                    </div>
                    <?php
                    ?>
                    <div class="table_item_box_name">
                          <?php
                               echo "<p> " . $row['user'] . "</p>";
                          ?>

                    </div>
                <?php
                     ?>
                    <div class="table_item_box_name">
                          <?php
                               echo "<p> " . $row['pass'] . "</p>";
                          ?>

                    </div>
                    <?php
                     ?>
                 


                    <div class="btn_cont">

               
                    <div class="btn_block">
                          <?php
                               
                               echo "<form action='php/del_req.php' method='post'>
                               <input type='hidden' name='id' value='" . $row["id"] . "' />
                               <button class = 'done' type ='submit'><img src = 'img/ok.png'></button>
                          </form>";


                          ?>

                    </div>   
                    <div class="btn_block">
                          <?php
                               
                               echo "<form action='php/del_req.php' method='post'>
                               <input type='hidden' name='id' value='" . $row["id"] . "' />
                               <button type ='submit'><img src='img/trash.png' alt='Ooops....'></button>
                          </form>";


                          ?>

                    </div>  

                    </div>
                <?php
                ?>
                </div> <!--table_item---> 
    
                <?php
            }

            ?>
            <?php
            // Close the connection
            $connection->close();
            ?>
