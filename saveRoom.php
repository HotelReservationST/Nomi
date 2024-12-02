<?php

// CONNECTION LINK OF connection.php 
include "connection.php";

$cRoom = $_POST['Room']; // <--- POST THE DATA TO EACH SPESIFIC COLUMNS;
$cType = $_POST['Type'];
$cPax = $_POST['Pax'];
$cPrice = $_POST['Price'];
$cImage = $_POST['Image'];
// $cVal = $_POST['Availab'];


// THE SQL STATEMENT TO INSERT DATA TO MY SQL DATABASE
$stmt = $conn->prepare("INSERT INTO accomodation (RoomNo, RoomType, NoGuest, Rate, RoomImage) VALUES (?, ?, ?, ?, ?)");

$stmt->bindParam(1, $cRoom);
$stmt->bindParam(2, $cType);
$stmt->bindParam(3, $cPax);
$stmt->bindParam(4, $cPrice);
$stmt->bindParam(5, $cImage, PDO::PARAM_LOB);
// $stmt->bindParam(6, $cVal);


// THE CONTENT OF NOTIFICATION THAT APPEAR IF THE STATEMENT IS PROPERLY EXEUTED WHEN A NEW DATA IS ADDED
if ($stmt->execute()) {
    echo "New Data Added";
} else {
    echo "Error";
}
?>