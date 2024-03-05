<?php
include("../conn.php");

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = "INSERT INTO reviews (name, comment) VALUES ('$name', '$comment')";

if ($connection->query($sql) === TRUE) {
   header("location:http://localhost/satiksme_new/main.php");
   
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$connection->close();
?>
