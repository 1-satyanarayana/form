<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $_SESSION['admin'] = $username;
    header("Location: admin-panel.php");
} else {
    echo "Invalid Login!";
}
?>