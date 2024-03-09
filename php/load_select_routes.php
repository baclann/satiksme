<?php
include "../conn.php";

$connection = mysqli_connect($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Kļūda pieslēdzoties pie datubāzes: " . $connection->connect_error);
}

$sql = "SELECT `route` FROM `route_list`";
$stmt = $connection->prepare($sql);

if ($stmt === false) {
    die("Prepare failed: (" . $connection->errno . ") " . $connection->error);
}

$stmt->execute();
$result = $stmt->get_result();

$routes = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $routes[] = $row['route'];
    }
}
echo json_encode($routes); // Output routes as JSON

$stmt->close();
$connection->close();
?>
