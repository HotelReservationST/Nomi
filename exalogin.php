<?php
// echo"hello";
session_start();
include "connection.php";

$uname = $_POST['username'];
$pwd = $_POST['password'];

// Check if the submitted credentials belong to an admin
$sql_admin = "SELECT * FROM admin WHERE Username=? AND password=?";
$stmt_admin = $conn->prepare($sql_admin);
$stmt_admin->bindParam(1, $uname);
$stmt_admin->bindParam(2, $pwd);
$stmt_admin->execute();

$admin = $stmt_admin->fetch((PDO::FETCH_ASSOC));

// Check if the submitted credentials belong to a user
$sql_user = "SELECT * FROM client WHERE Username=? AND Password=?";
$stmt_user = $conn->prepare($sql_user);
$stmt_user->bindParam(1, $uname);
$stmt_user->bindParam(2, $pwd);
$stmt_user->execute();

$user = $stmt_user->fetch((PDO::FETCH_ASSOC));

if ($admin) {
    // $admin=["Fname"=>$admin["Fname"]];
    // // Admin login successful
    $_SESSION['Username'] = $admin["Username"];
    $_SESSION['password'] = $admin["password"];
    echo json_encode(["status" => "success"]);

} elseif ($user) {
    // $user=["Fame"=>$user["Fame"]];
    // // User login successful
    $_SESSION['Client_id'] = $user["Client_id"];
    $_SESSION['Fame'] = $user["Fame"];
    echo json_encode(["status" => "successfully"]);
} else {
    // Invalid login
    echo json_encode(["error" => "User not found!"]);
}
?>