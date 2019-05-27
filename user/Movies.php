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
<script src="java.js"></script>

  <!-- menu bar -->
  <link rel="stylesheet" type="text/css" href="style/menu bar.css">

  <!-- footer -->
  <link rel="stylesheet" type="text/css" href="style/footer.css">

  <!--slide header-->
  <link rel="stylesheet" type="text/css" href="style/slideheader.css">

  <!-- Log Out -->
  <link rel="stylesheet" type="text/css" href="style/button.css">



  <!-- User Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style/user icon.css">
  
  <!-- movie list -->
  <link rel="stylesheet" type="text/css" href="style/moviestyle.css">
  

  
  

  <style>
    body {
      background-color: rgb(105, 102, 102);
      overflow-x: hidden;
    }
    .card{
      width:20%;
      margin:50px 0px 0px 80px;
    }
    table td{
      width:500px;
     
    }
    img{
      width:200px;
      /* margin:50px 0px 0px 80px; */
    }

        .sign{
    margin-left: 350px;
    text-decoration: none;
    padding-left: 10px;
}

        /* slide images */
        .mySlides img{
        width: 100%;
        height: 615px;
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

input[type=text]{
  width:230px;
  height:30px;
 
}


  </style>

</head>



<body>

  <!-- manu bar -->

  <ul id="menu">
    <li id="menubar">
      <a href="#">&nbsp; Imagine Movies</a>
    </li>
    <li id="menubar">
      <a href="Home.php">HOME</a>
    </li>
    <li id="menubar">
      <a class="active" >MOVIES & SHOW TIMES</a>
    </li>
    <li id="menubar">
      <a href="Trailers.html">TRAILERS</a>
    </li>
    <li id="menubar">
      <a href="Rates & Show Times.html">RATINGS</a>
    </li>
    <li id="menubar">
      <a href="Offers.html">OFFERS</a>
    </li>
    <li id="menubar">
      <a href="Contact us.html">CONTACT US</a>
    </li>

    <a href="inform.php" class="user"><?php echo $member; ?></a>
    <button class="button sign"><a  href="logout.php">Log Out</a></button>

    <i class="fa fa-user-circle" style="font-size:34px; color:blanchedalmond"></i>
  </ul>


  <!-- Slide Header -->
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="images/home/film1.1.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="images/home/film3.1.jpg">
    </div>

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="images/home/film3.2.png">
    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
  <br/>

	
	<!-- Now showing Movies Table -->
	
<form method='POST' class="example" action="search.php" onsubmit="return check(this);">
  <input type="text" placeholder="Search.." name="search" value="">
  <button type="submit" name="submit"><i class="fa fa-search"></i></button>
</form>
	
	
	<h2 class="movie_category"><hr align="left" >Now Showing </h2>
<table>
<tr>
<div	 class="row">
<td>
<div class="card" align="top">
	<img  src="images/latest movies/Avengers Infinity War.jpg" alt="" >
	
						
					<h4 class="movie-name">Avengers:Infinity War (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>

<td>
<div class="card" align="top">
	<img  src="images/latest movies/Alien Siege.jpg" alt="" >
	
						
					<h4 class="movie-name">Alien Siege (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>

<td>
<div class="card" align="top">
	<img  src="images/latest movies/Aquaman.jpg" alt="">

<h4 class="movie-name">Aquaman (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>
</tr>

<tr>
<td>
<div class="card" align="top">
	<img  src="images/latest movies/Rampage.jpg" alt="" >

<h4 class="movie-name">Rampage (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>

<td>
<div class="card" align="top">
	<img  src="images/latest movies/The Miracle Season.jpg" alt="" >

<h4 class="movie-name">The Miracle Season (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>
</tr>
<table>

</div>

<br>
<table>
<tr>
<td>
<div class="row">

<div class="card" align="top">
	<img  src="images/latest movies/Avengers Infinity War.jpg" alt="" >
	
						
					<h4 class="movie-name">Avengers:Infinity War (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>

<td>
<div class="card" align="top">
	<img  src="images/latest movies/Alien Siege.jpg" alt="" >
	
						
					<h4 class="movie-name">Alien Siege (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>

<td>
<div class="card" align="top">
	<img  src="images/latest movies/Aquaman.jpg" alt="" >

<h4 class="movie-name">Aquaman (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>
</tr>
</table>

<table>
<tr>
<td>
<div class="card" >
	<img  src="images/latest movies/Rampage.jpg" alt="" >

<h4 class="movie-name">Rampage (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>

<td>
<div class="card" >
	<img  src="images/latest movies/The Miracle Season.jpg" alt="" >

<h4 class="movie-name">The Miracle Season (2018)</h4>
	
	<div class="btn1"><a href="Buytickets.php"><input type="button" class="srhbutton" value="Buy Tickets"></a></div>
</div>
</td>
</tr>
</table>

</div>
	
	
	
	
	
  <!--fotter -->
  <footer>
    <div id="foot">

      <div id="links">
        <a id="footmenu" href="">Home</a> |
        <a href="">Privacy Policy</a> |
        <a href="">Terms of Use</a> |
        <a href="">Disclaimer</a> |
        <a href="">About Us</a>
        <br/>
        <br/>
        <a id="footmenu" href="">Login</a> |
        <a href="">Register</a> |
        <a href="">Advertise</a> |
        <a href="">Careers</a> |
        <a href="">Contact Us</a>
        <br/>
        <br/>
        <img id="norton" src="images/norton.png">
      </div>

      <div id="inform">
        <img id="footlogo" src="images/ss.png">
        <br/>
        <p>� 2018 Imagine Movies. All Rights Reserved. Site by
          <a href="#">Archmage</a>
          <br/>
          <br/> Copyright � 1995-2018 eBay Inc. All Rights Reserved. Accessibility, User Agreement, Privacy, Cookies and AdChoice
          <br/> Norton Secured - powered by Verisign</p>

      </div>
    </div>
  </footer>



  <!-- slide header js -->
  <script src="JS/slideheader.js"></script>


</body>

</html>