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
	$admin_id = '';
	$name = '';
	$email = '';
	$contact = '';
	$password = '';

	if(isset($_GET['admin_id'])){
		//get admin information
		$admin_id = mysqli_real_escape_string($connection,$_GET['admin_id']);
		$query = "SELECT * FROM admin WHERE id = {$admin_id} LIMIT 1";

		$result_set = mysqli_query($connection,$query);

		if($result_set){
			if(mysqli_num_rows($result_set) == 1){
				//user found
				$result = mysqli_fetch_assoc($result_set);
				$name = $result['name'];
				$email = $result['email'];
				$contact = $result['contact'];
			}else{
				//user unfound
				header('Location:admins.php?err=admin_not_found');
			}
		}else{
			//query unsuccessful
			header('Location:admins.php?err=query_failed');
		}
	}


	if(isset($_POST['submit'])){
		$admin_id = $_POST['admin_id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];

		//check required feilds
		 $req_field = array('admin_id','name','email','contact');

		 foreach ($req_field as $field) {
		 	if(empty(trim($_POST[$field]))){
		 		$errors[] = $field . ' is required';
		 	}
		 }
		 //cheking length
		 $max_len_fields = array('name'=>40,'email'=>40,'contact'=>12);

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
		 $query = "SELECT * FROM admin WHERE email ='{$email}' AND id != {$admin_id} LIMIT 1";

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

		 	 $query = "UPDATE admin SET ";
		 	 $query .= "name = '{$name}',";
		 	 $query .= "email = '{$email}',";
		 	 $query .= "contact = '{$contact}'";
		 	 $query .= "WHERE id = {$admin_id} LIMIT 1";

		 	 $result = mysqli_query($connection, $query);

		 	 if($result){
		 	 	//query successful... redirect
		 	 	header('Location:admins.php?admin_Modified=true');		 	 	
		 	 }else{
		 	 	$errors[] = 'Failed to Modify the record.';
		 	 }

		 }
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View / Modify Admin</title> 
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
				
	<h2>View / Modify Admin</h2>

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

	<form action="modify-admin.php" method="post" class="adminform">
		<input type="hidden" name="admin_id" value="<?php echo $admin_id;?>">
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
			 <a href="change-password.php?admin_id=<?php echo $admin_id; ?>">Change Password..</a>
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