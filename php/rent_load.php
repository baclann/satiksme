<?php
include("../conn.php");

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$datums = $_POST['date'];
$laiks_no = $_POST['time_start'];
$laiks_lidz = $_POST['time_end'];
$desc = $_POST['description'];
$sql = "INSERT INTO rents (name, phone, type, datums, laiks_no, laiks_lidz, description) VALUES ('$name', '$phone', '$type', '$datums', '$laiks_no', '$laiks_lidz', '$desc')";

if ($connection->query($sql) === TRUE) {

   header("location:http://localhost/satiksme_new/rent.php");
   
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>
