<?php
include "../conn.php";

// Create connection
$conn =  mysqli_connect($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bus_nums = $_GET['bus_nums'];

$sql = "SELECT id, route FROM route_list WHERE FIND_IN_SET('$bus_nums', bus_nums)";
$result = $conn->query($sql);

$rows = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}

echo json_encode($rows);

$conn->close();
?>
