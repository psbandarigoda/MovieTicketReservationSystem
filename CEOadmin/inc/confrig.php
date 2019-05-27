<?php

$server = 'localhost';
$user_name = 'root';
$password = '';
$database = 'movieticket';

$connection = mysqli_connect('localhost','root','','movieticket');

//check connection
if(mysqli_connect_errno()){

    die('Dtabase Connection Failed' . mysqli_connect_error());

}
?>