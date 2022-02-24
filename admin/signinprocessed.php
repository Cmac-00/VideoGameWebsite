<?php
session_start();
include("conn.php");

$email = $_POST['email'];
$password = $_POST['password'];

$checkadmin = "SELECT * FROM vg_auth WHERE Email = '$email' AND Password=MD5('$password')";




$result = $conn->query($checkadmin);

if(!$result) {
    $conn->error;
}
$row = $result->fetch_assoc();
$name= $row['FirstName'];
$num = $result->num_rows;

if($num > 0) {
    $_SESSION['adminlogin'] = $name;
    header("Location: index.php");
} else {
    header("Location: ../signin.html");
    
    
   
}
?>