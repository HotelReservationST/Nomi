<?php

// CONNECTION LINK OF connection.php 
include "connection.php";

$Room_id = $_POST['acc_id'];
$RoNo = $_POST['RoomNo']; // <--- POST THE DATA TO EACH SPESIFIC COLUMNS;
$RoTy = $_POST['RoomType'];
$NoGu = $_POST['NoGuest'];
$RoPr = $_POST['Rate'];
// $RoIm = $_POST['RoomImage'];


// THE SQL STATEMENT TO INSERT DATA TO MY SQL DATABASE
$stmt = $conn->prepare("UPDATE accomodation SET RoomNo=?, RoomType=?, NoGuest=?, Rate=? WHERE acc_id=?");

$stmt->bindParam(1, $RoNo);
$stmt->bindParam(2, $RoTy);
$stmt->bindParam(3, $NoGu);
$stmt->bindParam(4, $RoPr);
// $stmt->bindParam(5, $RoIm, PDO::PARAM_LOB);           
$stmt->bindParam(5, $Room_id);

// THE CONTENT OF NOTIFICATION THAT APPEAR IF THE STATEMENT IS PROPERLY EXEUTED WHEN A NEW DATA IS ADDED
if ($stmt->execute()) {
    echo "New Data Added!";
} else {
    echo "Error";
}
?>