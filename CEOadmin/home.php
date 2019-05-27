<?php session_start(); ?>
<?php require_once('inc/confrig.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php

  if (!isset($_SESSION['id'])){
  header('Location: welcome.php');
 }
?>
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style/main.css">
    <style>
    body{
      margin: 0;
      padding: 0;
    }
    body {
      background: url(images/background1.jpg);
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      width:100%;
      height:100vh;
      display: flex;
    }
    .mainbody{
      height: 100vh;
      width: 100%;
      /* background: url(images/rain.png); */
      /* animation: rain .3s linear infinite; */
    }
    /* @keyframes rain {
      0%
      {
        background-position: 0% 0%;
      }
      100%
      {
        background-position: 20% 100%;
      }
    } */
        header .name {
       background: url(images/water5.jpg);
       float: left;
       font-family: cursive;
       text-transform: uppercase;
       color:rgba(255,255,255,.1);
       text-align: center;
       font-size: 2em;
       background-repeat: repeat-x;
       -webkit-background-clip:text;
       animation: animate 10s linear infinite

     }
     .mbody{
      margin:10% 0% 0% 25%;
     }
    
    </style>

</head>


<body>
<div class="mainbody clearfix">
  <header>
    <div class="name">Imagine Movies</div>
    <div class="loggedin"> <?php echo $_SESSION['name']; ?> 
    <a href="logout.php">Log out</a>
    </div>

  </header>

    <section class="mbody clearfix">
     <div class="menubar">
      
        <ul>
           <li><a href="upload.php">MOVIES</a></li>
                      
              <li><a href="admins.php">SETTINGS</a></li>
                   
              <li><a href="Admin.Show Times.html">SHOW TIMES</a></li>

              <li><a href="Admin.Tickets.html">TICKETS</a></li>

              <li><a href="Admin.Theater.html">THEATERS</a></li>

              <li><a href="member.php">MEMBER</a></li>

              <li><a href="Admin.Contact us.html">CONTACT US</a></li>
 
        </ul>
       
     </div>
  </section>
</div>
</body>

</html>
