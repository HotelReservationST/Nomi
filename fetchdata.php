<?php
include "connection.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT acc_id, RoomNo FROM accomodation";
$result = $conn->query($sql);

$items = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
