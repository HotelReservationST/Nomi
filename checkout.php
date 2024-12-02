<?php 
include "connection.php";

try {
    $Book_id = $_POST['Book_id']; 
    $action = $_POST['action'];  // Action can be 'confirm' or 'decline'

    if ($action == 'confirmcheckOut') {
        $Stat = 'Check Out';

        // Update room availability
        $stmtRoom = $conn->prepare("UPDATE accomodation SET Availability = 'Available' WHERE acc_id IN (SELECT acc_id FROM booking WHERE Booking_id = ?)");
        $stmtRoom->bindParam(1, $Book_id);
        $stmtRoom->execute();
    } elseif ($action == 'declinecheckOut') {
        $Stat = 'Cancel';
    } else {
        echo "Status Updated!";
        exit();
    }

    $stmt = $conn->prepare("UPDATE booking SET stat=? WHERE Booking_id=?");
    $stmt->bindParam(1, $Stat);
    $stmt->bindParam(2, $Book_id);

    if ($stmt->execute()) {
        echo "Status Updated!";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];  // Display detailed error message
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();  // Catch any PDO exceptions
}
?>
