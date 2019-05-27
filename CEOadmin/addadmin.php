<?php session_start(); ?>
<?php require_once('inc/confrig.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php

  if (!isset($_SESSION['id'])){
  header('Location: welcome.php');
 }
?>
<?php
	$errors = array();
	$name = '';
	$email = '';
	$contact = '';
	$password = '';

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];

		//check required feilds
		 $req_field = array('name','email','contact','password');

		 foreach ($req_field as $field) {
		 	if(empty(trim($_POST[$field]))){
		 		$errors[] = $field . ' is required';
		 	}
		 }
		 //cheking length
		 $max_len_fields = array('name'=>40,'email'=>40,'contact'=>12,'password'=>25);

		 foreach ($max_len_fields as $field => $max_len) {
		 	if(strlen(trim($_POST[$field])) > $max_len){
		 		$errors[] = $field . ' must be less than ' . $max_len . ' characters';
		 	}
		 }
		 //check email
		 if (!is_email($_POST['email'])){
		 	$errors[] = 'Email address is invalid.';
		 }
		 //check email already
		 $email = mysqli_real_escape_string($connection, $_POST['email']);
		 $query = "SELECT * FROM admin WHERE email ='{$email}' LIMIT 1";

		 $result_set = mysqli_query($connection,$query);

		 if($result_set){
		 	if (mysqli_num_rows($result_set)==1){
		 		$errors[] = 'Email address is already exists';
		 	}
		 }
		 if(empty($errors)){
		 	//no error found..add new record
		 	 $name = mysqli_real_escape_string($connection, $_POST['name']);
		 	 $contact = mysqli_real_escape_string($connection, $_POST['contact']);
		 	 $password = mysqli_real_escape_string($connection, $_POST['password']);

		 	 $query = "INSERT INTO admin ( ";
		 	 $query .= "name,email,contact,password,is_deleted";
		 	 $query .= ") VALUES (";
		 	 $query .= "'{$name}','{$email}','$contact','{$password}',0";
		 	 $query .= ")";

		 	 $result = mysqli_query($connection, $query);

		 	 if($result){
		 	 	//query successful... redirect
		 	 	header('Location:admins.php?admin_added=true');		 	 	
		 	 }else{
		 	 	$errors[] = 'Failed to add the new record.';
		 	 }

		 }
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new Admin</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    display: flex;
    background-repeat: no-repeat;
    width:100%;
    height:100vh;           
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
    </style>
</head>
<body>
	<div class="mainbody">
	<header>
	<div class="back"><a href="admins.php"><< </a></div>		
    <div class="name">&nbsp;Imagine Movies</div>
    <div class="loggedin"> <?php echo $_SESSION['name']; ?> 
    <a href="logout.php">Log out</a>
    </div>

  </header>
	<div class="add">
				
	<h2>Add New Admin</h2>

	<?php
		if (!empty($errors)){
			echo '<div class="errmsg">';
			echo '<b>There were error(s) on your form.</br>';
			foreach ($errors as $error) {
				echo $error . '<br>';
			}
			echo '</div>';
		}
	?>

	<form action="addadmin.php" method="post" class="adminform">
		<p>
			<label for="">Name:</label>
			<input type="text" name="name"<?php echo 'value="' . $name . '"';?>>
		</p>
		<p>
			<label for="">Email Address:</label>
			<input type="text" name="email"<?php echo 'value="' . $email . '"';?>>
		</p>
		<p>
			<label for="">Contact:</label>
			<input type="text" name="contact"<?php echo 'value="' . $contact . '"';?>>
		</p>
		<p>
			<label for="">Password:</label>
			<input type="password" name="password">
		</p>
		<p>
			<label for="">&nbsp;</label>
			<button type="submit" name="submit">Save</button>
		</p>


	</form>		
	</div>
	</div>		
</body>
</html>
<?php mysqli_close($connection); ?>