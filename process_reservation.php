<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];

    // Check if this is a decline request
    if (isset($_POST["decline"]) && $_POST["decline"] === "true") {
        // Process decline action
        // Here you can update the database or perform any other action as needed
        echo "Booking declined.";
        exit;
    }

    // Process confirmation action
    // Here you can update the database or perform any other action as needed
    echo "Booking confirmed.";
}
?>
