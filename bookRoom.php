<?php

// CONNECTION LINK OF connection.php 
include "connection.php";

$bfname = $_POST['fname']; // <--- POST THE DATA TO EACH SPESIFIC COLUMNS;
$blname = $_POST['lname'];
$btime = $_POST['CheIn'];
$bdate = $_POST['CheOut'];
$bguest = $_POST['Guest'];
$bcontact = $_POST['Contact'];
$broom= $_POST['RoomNo'];


try{
    $conn->beginTransaction();
// THE SQL STATEMENT TO INSERT DATA TO MY SQL DATABASE
$stmt = $conn->prepare("INSERT INTO booking (fname, lname, CheIn, CheOut, Guest, Contact, RoomNo) VALUES (?,?,?,?,?,?,?)");

$stmt->bindParam(1, $bfname);
$stmt->bindParam(2, $blname);
$stmt->bindParam(3, $btime);
$stmt->bindParam(4, $bdate);
$stmt->bindParam(5, $bguest);
$stmt->bindParam(6, $bcontact);
$stmt->bindParam(7, $broom);

// THE CONTENT OF NOTIFICATION THAT APPEAR IF THE STATEMENT IS PROPERLY EXEUTED WHEN A NEW DATA IS ADDED
if ($stmt->execute()) {
    $updateRoom ="UPDATE accomodation SET Availability='Unavailable' WHERE RoomNo=?";
$stmt =$conn->prepare($updateRoom);
$stmt->bindParam(1,$broom);

if ($stmt->execute()) {
    // Commit the transaction
    $conn->commit();
    echo "New Record Added and Room status updated";
} else {
    // Rollback if room update fails
    $conn->rollBack();
    echo "Error updating room status";
}
} else {
// Rollback if insert fails
$conn->rollBack();
echo "Error adding new record";
}

}catch (Exception $e) {
    // Rollback in case of error
    $conn->rollBack();
    echo "Failed: " . $e->getMessage();
}

?>