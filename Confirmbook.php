<?php 
include "connection.php";

try {
    $Book_id = $_POST['Book_id']; 
    $action = $_POST['action'];  // Action can be 'confirm' or 'decline'

    if ($action == 'confirm') {
        $Stat = 'Confirmed';
    } elseif ($action == 'decline') {
        $Stat = 'Declined';
    } else {
        echo "Invalid action!";
        exit();
    }

    $stmt = $conn->prepare("UPDATE booking SET stat=? WHERE Booking_id=?");
    $stmt->bindParam(1, $Stat);
    $stmt->bindParam(2, $Book_id);

    if ($stmt->execute()) {
        echo "Booking Status Updated!";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];  // Display detailed error message
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();  // Catch any PDO exceptions
}
?>
