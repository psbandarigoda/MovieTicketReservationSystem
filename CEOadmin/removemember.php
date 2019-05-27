<?php
session_start();
require 'inc/confrig.php';

?>

<?php
if(isset($_GET['id']))
{
    $submit_id=$_GET['id'];
  
} 
?>

<?php

    $sql = "DELETE FROM `member` WHERE member_id ='$submit_id'";
    // echo $sql;
    if(mysqli_query($connection,$sql))
    {
        echo "deleted successfully";
        header("location:member.php");
    }
    else
    {
        echo "Error:".$connection->error;
    }
?>