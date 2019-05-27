<?php
session_start();
require 'confrig.php';
require ("session.php");
?>

<?php

$member = $_SESSION["loggedmember"];

$username = $_POST["name"];
$email1 = $_POST["email"];
$contact = $_POST["contactnumber"];
$password = $_POST["psw"];


if(!$connection){
    echo mysqli_connect_error();
}
else{
    $sql = "SELECT * FROM `member` WHERE `email_address`='$member'";
    $result = $connection->query($sql);
    $row = ($result -> fetch_assoc());
 
    $pass = $row['password'];
    $id = $row['member_id'];

    if($password == $pass){
            
            $sql1 = "UPDATE `member` SET `name`='$username',`email_address`='$email1',`Contact`='$contact' WHERE `member_id`='$id'";
            if(mysqli_query($connection,$sql1) == TRUE){  
                             
                header("location:Home.php");
            }
            else{
                echo"update error";
            }
    }
    else{
        echo"error password";
    }
    
    }


?>