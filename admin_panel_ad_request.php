<?php
$alert = '';
if (empty($_COOKIE['auth'])) {
   
    header("location:http://satiksme.webexteam.eu/auth_page.php"); 
    $alert = 'Autorizācijas laiks beidzies.. Lūdzu autorizējaties atkārtoti.';
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Administrēšanas vietne</title>
</head>
<body>
    <div class="nav_block">
        <div class="items">

            <ul class = "menu">
            <a  href="#">Jaunumi</a>
            <a  href="admin_panel_ad_request.php">Reklāmas pieteikumi</a>
            <a  href="admin_panel_rents.php">Nomas pieteikumi</a>
            <a  href="admin_panel_complaints.php">Sūdzības</a>
            <a  href="admin_panel_rev.php">Atsauksmes</a>
            <a  href="admin_panel_users.php">Konti</a>
            </ul>

        </div>
        <div class="items">
        <ul class = "menu">
        <a class = "nav_actions" href="php/logout.php">Iziet</a>
        <a class="nav_actions" href="#"><img src="img/user.png" alt=""></a>
        <a class="nav_actions" href="main.php"><img src="img/home.png" alt=""></a>
        </ul>
            </div>
    </div>

    <div class="wrapper">
        <div class="req_table_block">
            <div class="action_bar">

            <div class="actions">
                <h2>Reklāmas pieteikumi</h2>
            </div>
            <div class="actions ">
             
            </div>
        </div>

        <div class="table_titles_block">

 
                
            </div>

        <div class="table_block">
     
        <?php
            // Connect to your MySQL database
            include "conn.php";

            // Fetch data from the 'reviews' table
            $result = $connection->query("SELECT id, name, phone, type, date_start, date_end, description, file FROM ads_req");

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
                               echo "<p> " . $row['name'] . "</p>";
                          ?>

                    </div>
                <?php
                     ?>
                    <div class="table_item_box_name">
                          <?php
                               echo "<p> " . $row['phone'] . "</p>";
                          ?>

                    </div>
                    <?php
                     ?>
                    <div class="table_item_box_name">
                          <?php
                               echo "<p>" . $row['type'] . "</p>";
                          ?>

                    </div>
                    <?php
                     ?>
                    <div class="table_item_box_name">
                          <?php
                               echo "<p>" . $row['date_start'] . "</p>";
                          ?>

                    </div>       
                    <?php
                     ?>
                    <div class="table_item_box_desc">
                          <?php
                               echo "<p>" . $row['date_end'] . "</p>";
                          ?>

                    </div>   
                    <?php
                     ?>
                    <div class="table_item_box_desc">
                          <?php
                               echo "<p>" . $row['description'] . "</p>";
                          ?>

                    </div>   
                <?php
                ?>  
 <?php
                     ?>
                    <div class="table_item_box_desc">
                          <?php
                               echo "<p>" . $row['file'] . "</p>";
                          ?>

                    </div>   
                    <?php
                ?>  
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
                               
                               echo "<form action='php/del_ads.php' method='post'>
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

                  
            
        </div>
        </div>
    </div>
</body>
<footer> &copy;2024 Zunda Dev</footer>
</html>