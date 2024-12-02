<?php 
session_start();

if(isset($_SESSION['Fame'])){

    echo json_encode(['Fame'=> $_SESSION['Fame']]);
}else{
    echo json_encode(['Fame'=>  null]);
}
?>