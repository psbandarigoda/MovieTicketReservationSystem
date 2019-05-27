<?php session_start(); ?>
<?php require_once('inc/confrig.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php

  if (!isset($_SESSION['id'])){
  header('Location: welcome.php');
 }
?>

<?php
    if(!$connection){
        echo mysqli_connect_error();
    }else{
        $sql = "SELECT * FROM member";
        $result = mysqli_query($connection,$sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style/main.css">
	<style>
  body{
      margin: 0;
      padding: 0;
    }
    .mainbody {
      background: url(images/background1.jpg);
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      width:100%;
      height:100vh;
      display: flex;
    }
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
     body {
            background: url(images/background1.jpg);
            background-size: cover;
        }
        .main{
            margin-top:20%;
        }
        .main a{
            font-size: 15px;
        }
        .table.list td{
	          font-size: 22px;
        }
        
        .main{  
	background:rgba(0,0,0,0.8);
	color: #fff;
	width: 60%;	
	/* padding: 40px 30px; */
	border-radius: 15px;
  /* margin:10% 0% 0% 20%; */
  margin:auto;
	height: auto;
	
}
    
	</style>
</head>
<body>
<div class="mainbody">
  <header>    
    <div class="back"><a href="home.php"><< </a></div>
    <div class="name">&nbsp;Imagine Movies</div>
    <div class="loggedin"> <?php echo $_SESSION['name']; ?> 
    <a href="logout.php">Log out</a>
    </div>

  </header> 
  

  <div class="main clearfix">			
	<h1>Members</h1><span><a href="addmember.php">+ Add New Member</a></span>
      
      <table class="list clearfix">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Contact</th>
            <th>Password</th>
            <th>Remove Member</th>
            <th>View</th>

          </tr>
        </thead>
        <tbody>
        <?php 
            while($row = $result->fetch_assoc()){
        ?>
          <tr>
            <td>
              <?php  echo $row['member_id'] ?>
            </td>
            <td>
              <?php  echo $row['name'] ?>
            </td>
            <td>
              <?php echo $row['email_address'] ?> 
            </td>
            <td>
              <?php echo $row['Contact'] ?>
            </td>
            <td>
              <?php echo  $row['password']?> 
            </td>
            <td>
            <a href="removemember.php?id=<?php echo $row['member_id'];?>">Remove</a>
            </td>
            <td>
            <a href="viewmember.php?id=<?php echo $row['member_id'];?>">View</a>
            </td>

          </tr>

          <?php
            }
                     mysqli_close($connection);
                 }
                 ?>
        </tbody>
      </table>
      </td>
  </table>


</div>
</body>
</html>