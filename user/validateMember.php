<?php
session_start();
require 'confrig.php';

$username = $_GET["uname"];
$passw = $_GET["psw"];

if(!$connection){
    echo mysqli_connect_error();
}
else{
    $sql = "SELECT `email_address`, `password` FROM `member` WHERE `email_address`= '$username'";
    $result = $connection->query($sql);

    $row = ($result -> fetch_assoc());
    $email1 = $row['email_address']; 
    $pass = $row['password'];
    $user = $row['name'];

    if ($username == $email1 && $passw == $pass) {

        $_SESSION["loggedmember"] = $username;

    header("location:Home.php");
    }
    else {
    header("location:Welcome.php");
    }
    
}

?>