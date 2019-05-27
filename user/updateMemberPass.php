<?php
session_start();
require 'confrig.php';
require ("session.php");
?>

<?php

$member = $_SESSION["loggedmember"];

$password = $_POST["psw"];
$newpassword = $_POST["npsw"];
$newpassrip = $_POST["npsw-repeat"];

if(!$connection){
    echo mysqli_connect_error();
}
else{
    $sql = "SELECT * FROM `member` WHERE `email_address`='$member'";
    $result = $connection->query($sql);
    $row = ($result -> fetch_assoc());
 
    $pass = $row['password'];
    $id = $row['member_id'];
    echo $id;

    if($password == $pass){

        if($newpassword == $newpassrip){
        
            $sql1 = "UPDATE `member` SET `password`='$newpassword' WHERE `member_id`='$id'";
            // echo $sql1;
            if(mysqli_query($connection,$sql1) == TRUE){ 
                header("location:Home.php");
            }
            else{
                echo"error password";
            }
        }
        else{
            echo"Does not match password";
        }
    }
  
}

?>