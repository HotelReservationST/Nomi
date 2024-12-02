<?php
session_start();
include "connection.php";

if(isset($_SESSION['Client_id'])){
    $cId = $_SESSION['Client_id'];

    $stmt =$conn->prepare("SELECT * FROM client WHERE Client_id =?");
    $stmt->execute([$Client_id]);
    $client = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($client);
}else{
    echo json_encode([]);
}
?>