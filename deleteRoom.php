<?php 
include "connection.php"; //<--- LINK CONNECTION TO connection.php

$roomID = $_POST['Acc_id']; //<--- CLASSIFY ROW IS TO BE DELETED

// USES THE DELETE SQL STATEMENT TO DELETE THE DATA IN THE DATABASE 
$stmt = $conn->prepare("DELETE FROM accomodation WHERE acc_id=?");
$stmt->bindParam(1, $roomID);

// THE CONTENT OF NOTIFICATION THAT APPEAR IF THE STATEMENT IS PROPERLY EXEUTED WHEN A NEW DATA IS DELETED
if ($stmt->execute()) {
    echo "Record Deleted!";
} else {
    echo "Error!";
}




?>