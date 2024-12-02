<?php
include "connection.php"; //<--- LINK CONNECTION TO connection.php

$booking_id = $_POST['Booking_id'];
$bfname = $_POST['fname']; // <--- POST THE DATA TO EACH SPESIFIC COLUMNS;
$blname = $_POST['lname'];
$btime = $_POST['TimeA'];
$bdate = $_POST['dateA'];
$bmaxnoguest = $_POST['Guest'];
$bcontactno = $_POST['Contact'];
$baccommodation = $_POST['RoomNo'];

// UPDATES THE RECORD IN THE DATA BASE IT USES THE UPDATE SQL STATEMENT
$stmt = $conn->prepare("UPDATE booking SET fname=?, lname=?, CheIn=?, CheOut=?, Guest=?, Contact=?, RoomNo=?  WHERE Booking_id=?");
$stmt->bindParam(1, $bfname);
$stmt->bindParam(2, $blname);
$stmt->bindParam(3, $btime);
$stmt->bindParam(4, $bdate);
$stmt->bindParam(5, $bmaxnoguest);
$stmt->bindParam(6, $bcontactno);
$stmt->bindParam(7, $baccommodation);
$stmt->bindParam(8, $booking_id);

// THE CONTENT OF NOTIFICATION THAT APPEAR IF THE STATEMENT IS PROPERLY EXEUTED WHEN A NEW DATA IS UPDATED
if ($stmt->execute()) {
    echo "Record Updated";
} else {
    echo "Error!";
}

?>


