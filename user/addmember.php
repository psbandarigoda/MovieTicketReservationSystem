<?php
session_start();
require 'confrig.php';

$username = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contactnumber"];
$password = $_POST["psw"];
$reppassword = $_POST["psw-repeat"];

if(!$connection){
    echo mysqli_connect_error();
}
else{
    if($password == $reppassword){

            $sql = "INSERT INTO `member` (`member_id`, `name`, `email_address`, `Contact`, `password`) VALUES (NULL, '$username', '$email', '$contact', '$password');";
            
            if(mysqli_query($connection,$sql)==TRUE){

                $_SESSION["signupmember"] = $email;
        
            echo ("<script type='text/javascript'>alert('Signup successfully!')</script>");
            
            header("location:Welcome.php");

            // echo ("<script LANGUAGE='JavaScript'>
            // window.location.href='Welcome.php';
            //         window.alert('Succesfully Updated');
                     
            //      </script>");
            
            }
    }
    else{
        echo "<script>alert('Not match Password');window.location.href='Welcome.php';</script>";
        
    }
}


// $sql = "INSERT INTO member (`member_id`, `name`, `email_address`, `password`)
//  VALUES(NULL,'$username','$email','$contact','$password')";

?>

