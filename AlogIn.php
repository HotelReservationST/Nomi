<?php
include "connection.php"; //database connection code.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['aUsername'];
    $password = $_POST['aPassword'];

    // SQL query to check if the provided username and password match a record in your database
    $stmt = $conn->prepare("SELECT * FROM admin WHERE Username = ? AND password = ?");
    $stmt->bindParam(1, $Username);
    $stmt->bindParam(2, $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        //s Authentication successful
        echo "success";
    } else {
        // Authentication failed
        echo "error";
    }
} else {
    // Handle GET requests or other actions as needed.
}
?>
