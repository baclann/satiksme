<?php
include "../conn.php";
if(isset($_POST["id"]))
{
    $connection = new mysqli($host, $username, $password, $database);
    if (!$connection) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $userid = mysqli_real_escape_string($connection, $_POST["id"]);
    $sql = "DELETE FROM ads_req WHERE id = '$userid'";
    if(mysqli_query($connection, $sql)){
         
        header("Location: satiksme.webexteam.eu/admin_panel_ad_request.php");
    } else{
        echo "Kļūda: " . mysqli_error($connection);
    }
    mysqli_close($connection);    
}