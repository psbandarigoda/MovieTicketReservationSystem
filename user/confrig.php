<?php
$server = "localhost";
$user_name = "root";
$password = "";
$database = "movieticket";

$connection = new mysqli($server,$user_name,$password,$database);

if($connection -> connect_error){

    die("Connection Failed : ".$connection -> connection_error);

}

?>