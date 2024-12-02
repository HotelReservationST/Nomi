<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_item = $_POST['item'];
    // Process the selected item (e.g., store it in a database, perform an action, etc.)
    echo 'You selected Room no. with ID: ' . $selected_item;
}
?>