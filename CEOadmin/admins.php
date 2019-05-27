<?php session_start(); ?>
<?php require_once('inc/confrig.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php

  if (!isset($_SESSION['id'])){
  header('Location: welcome.php');
 }
   $admin_list ='';
   //get list
   $query = "SELECT * FROM admin WHERE is_deleted=0 ORDER BY name";
   $admins = mysqli_query($connection,$query);

   verify_query($admins);
   		while($admin = mysqli_fetch_assoc($admins)){
   			$admin_list .="<tr>";
   			$admin_list .="<td>{$admin['id']}</td>";
   			$admin_list .="<td>{$admin['name']}</td>";
   			$admin_list .="<td>{$admin['email']}</td>";
        $admin_list .="<td>{$admin['contact']}</td>";
   			$admin_list .="<td>{$admin['last_login']}</td>";
   			$admin_list .="<td><a href=\"modify-admin.php?admin_id={$admin['id']}\">Edit</a></td>";
   			$admin_list .="<td><a href=\"delete-admin.php?admin_id={$admin['id']}\"
                        onclick=\"return confirm('Are You Sure?');\">Delete</a></td>";
   			$admin_list .="</tr>";
   }
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
    height: 100%;
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
    <div class="name">&nbsp;Imagine Movies</span></div>
    <div class="loggedin"> <?php echo $_SESSION['name']; ?> 
    <a href="logout.php">Log out</a>
    </div>

  </header>
	<div class="main clearfix">		
	<h1>Admins</h1><span><a href="addadmin.php">+ Add New Admin</a></span>

		<table class="list clearfix">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
      <th>Contact</th>
			<th>Last Login</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php echo $admin_list ?>

		</table>
	</div>
</div>
</body>
</html>
<?php mysqli_close($connection); ?>