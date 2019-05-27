<?php
session_start();
require 'confrig.php';
require ("session.php");
?>
<?php

$member = $_SESSION["loggedmember"];

?>

<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- menu bar -->
  <link rel="stylesheet" type="text/css" href="style/menu bar.css">

  <!-- footer -->
  <link rel="stylesheet" type="text/css" href="style/footer.css">

  <!--slide header-->
  <link rel="stylesheet" type="text/css" href="style/slideheader.css">

  <!-- Log Out -->
  <link rel="stylesheet" type="text/css" href="style/button.css">

  <!-- background img -->


  <!-- User Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style/user icon.css">

  <!--offers body-->
  <link rel="stylesheet" type="text/css" href="style/offers.css">

  <link rel="stylesheet" type="text/css" href="style/buyticket.css">

  <style>
    body {
      background-color: rgb(105, 102, 102);
      overflow-x: hidden;
    }
    .user {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  /* bottom: 500px; */
  top:5px;
  width: 100%;
  text-align: left;
  background-color:red;
  width:auto;
  margin-left:20px;
}
  </style>

</head>



<body>
  <div id="maincontainer">

    <!-- manu bar -->

    <ul id="menu">
      <li id="menubar">
        <a href="#">&nbsp; Imagine Movies</a>
      </li>
      <li id="menubar">
        <a href="Home.php">HOME</a>
      </li>
      <li id="menubar">
        <a href="Movies.php">MOVIES</a>
      </li>
      <li id="menubar">
        <a href="Trailers.php">TRAILERS</a>
      </li>
      <li id="menubar">
        <a href="Rates & Show Times.php">RATES & SHOW TIMES</a>
      </li>
      <li id="menubar">
        <a href="offers.php">OFFERS</a>
      </li>
      <li id="menubar">
        <a href="Contact us.php">CONTACT US</a>
      </li>

      <a href="inform.php" class="user"><?php echo $member; ?></a>
      <button class="button sign"><a  href="logout.php">Log Out</a></button>

      <i class="fa fa-user-circle" style="font-size:34px; color:blanchedalmond"></i>
    </ul>


 