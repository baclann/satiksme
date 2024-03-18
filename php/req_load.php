<?php
include("../conn.php");

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$date_st = $_POST['date_start'];
$date_en = $_POST['date_end'];
$desc = $_POST['description'];
$file = $_POST['f_add'];

$sql = "INSERT INTO ads_req (name, phone, type, date_start, date_end, description, file) VALUES ('$name', '$phone', '$type', '$date_st', '$date_en', '$desc', '$file')";

if ($connection->query($sql) === TRUE) {

   header("location:http://satiksme.webexteam.eu/requests.php");
   
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>
