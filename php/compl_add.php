<?php
include("../conn.php");

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$reason = $_POST['type'];
$desc = $_POST['description'];
$date = date('Y-m-d');
$file = $_POST['file'];

$sql = "INSERT INTO complaints (name, phone, reason, situation, add_date, file) VALUES ('$name', '$phone', '$reason', '$desc', '$date', '$file')";

if ($connection->query($sql) === TRUE) {

   header("location:http://localhost/satiksme_new/complaints.php");
   
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>
