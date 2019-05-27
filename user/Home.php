<?php
session_start();
require 'confrig.php';
require ("session.php");
// require ("session2.php");
require 'configdb.php';
?>

<?php

$member = $_SESSION["loggedmember"];


?>

<?php
    if(!$conn){
        echo mysqli_connect_error();
    }else{
        $sql = "SELECT * FROM movie";
        $result = mysqli_query($conn,$sql);
    }
?>

<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- menu bar -->
  <link rel="stylesheet" type="text/css" href="style/menu bar.css">

  <!--characters-->
  <link rel="stylesheet" type="text/css" href="style/character.css">

  <!-- footer -->
  <link rel="stylesheet" type="text/css" href="style/footer.css">

  <!--slide header-->
  <link rel="stylesheet" type="text/css" href="style/slideheader.css">

  <!-- Log Out -->
  <link rel="stylesheet" type="text/css" href="style/button.css">



  <!-- User Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style/user icon.css">

  <style>
    body {
      background-color: rgb(105, 102, 102);
      overflow-x: hidden;
    }

        /* slide images */
        .mySlides img{
        width: 100%;
        height: 615px;
    }

    .sign{
    margin-left: 350px;
    text-decoration: none;
    padding-left: 10px;
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

  <!-- manu bar -->

  <ul id="menu">
      <li id="menubar">
        <a href="">&nbsp; Imagine Movies</a>
      </li>
      <li id="menubar">
        <a class="active">HOME</a>
      </li>
      <li id="menubar">
        <a href="Movies.php">MOVIES & SHOW TIMES</a>
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

   <!--table-->
 
    <table align="center" width="1000" border="1">
	<tr>
		<th bgcolor="#C48189">Film Name</th>
		<th bgcolor="#C48189">Type</th>
		<th bgcolor="#C48189">Duration</th>
		<th bgcolor="#C48189">Theaters</th>
		<th bgcolor="#C48189">Price</th>
		<th bgcolor="#C48189">Buy Tickets</th>
  </tr>
  


	<tr>
		<td height="37" bgcolor="#F88017"><div class="container"><button class="btn">Offer</button></div></td>
		<td bgcolor="#F88017"></td>
   		 <td bgcolor="#F88017"></td>
   		 <td bgcolor="#F88017"></td>
   		 <td bgcolor="#F88017"></td>
   		 <td bgcolor="#F88017"><a href="Buytickets.php"><div class="button"><span>Buy</span></div></a></td>
  </tr>

	<tr>
		<td height="37" bgcolor="#F88017"><div class="container"><button class="btn">Offer</button></div></td>
		<td bgcolor="#F88017"></td>
   	                     <td bgcolor="#F88017"></td>
    		<td bgcolor="#F88017"></td>
    		<td bgcolor="#F88017"></td>
   		 <td bgcolor="#F88017"><a href="Buytickets.php"><div class="button"><span>Buy</span></div></a></td>
  </tr>
  
    
  <?php 
            while($row = $result->fetch_assoc()){
    ?>

	<tr>
  		<td height="32"><?php echo $row['movieName'] ?></td>
      <td height="32"><?php echo $row['movieType'] ?></td>
      <td height="32"><?php echo $row['duration'] ?></td>
      <td height="32"></td>
      <td height="32"></td>
   	 <td><a href="Buytickets.php"><div class="button"><span>Buy</span></div></a></td>
 	 </tr>
	<!-- <tr>
  		  <td height="32"></td>
   		 <td></td>
  		  <td></td>
  		  <td></td>
  		  <td></td>
    		<td><a href="Buytickets.php"><div class="button"><span>Buy</span></div></a></td>
 	 </tr>
	<tr>
		     <td height="32"></td>
 		     <td></td>
    		     <td></td>
   		     <td></td>
   		     <td></td>
 		     <td><a href="Buytickets.php"><div class="button"><span>Buy</span></div></a></td>
 	 </tr>
	<tr>
  		   <td height="32"></td>
  		   <td></td>
 		   <td></td>
    		   <td></td>
   		   <td></td>
    		   <td><a href="Buytickets.php"><div class="button"><span>Buy</span></div></a></td>
	  </tr>
	<tr>
    		<td height="32"></td>
  		  <td></td>
  		  <td></td>
  		  <td></td>
  		  <td></td>
   		 <td><a href="Buytickets.php"><div class="button"><span>Buy</span></div></a></td>
    </tr> -->
    
    <?php
            }
                     mysqli_close($connection);
                 
                 ?>
       </table>

  <br/>
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
        <p>© 2018 Imagine Movies. All Rights Reserved. Site by
          <a href="#">Archmage</a>
          <br/>
          <br/> Copyright © 1995-2018 eBay Inc. All Rights Reserved. Accessibility, User Agreement, Privacy, Cookies and AdChoice
          <br/> Norton Secured - powered by Verisign</p>

      </div>
    </div>
  </footer>



  <!-- slide header js -->
  <script src="JS/slideheader.js"></script>


</body>

</html>
