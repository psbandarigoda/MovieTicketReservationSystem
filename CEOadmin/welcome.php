 <?php session_start(); ?>
<?php require_once('inc/confrig.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php
	//check submit
	if(isset($_POST['submit']))
	{
		$errors = array();
		//check name & password
		if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1){
			$errors[] = 'Admin Name Invalid';
		}
		if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1){
			$errors[] = 'Admin password Invalid';
		}
		//check any errors
		if(empty($errors)){
			//save name,password to variables
			$email    =mysqli_real_escape_string($connection,$_POST['email']);
			$password =mysqli_real_escape_string($connection,$_POST['password']);
			//$hashed_password = sha1($password);
			

			//prepare database
			$query = "SELECT * FROM admin 
					WHERE email = '{$email}' 
					AND password = '{$password}' 
					LIMIT 1";

			$result_set = mysqli_query($connection,$query);

			verify_query($result_set);
				//query succesfull
				if(mysqli_num_rows($result_set) == 1){
					//valid user found and direct home
					$admin = mysqli_fetch_assoc($result_set);
					$_SESSION['id'] = $admin['id'];
					$_SESSION['name'] = $admin['name'];
					//update last login
					$query = "UPDATE admin SET last_login = NOW()";
					$query .= "WHERE id = {$_SESSION['id']} LIMIT 1";

					$result_set = mysqli_query($connection,$query);

					verify_query(result_set);

					header('Location: home.php');
				}else{
					//invalid password
					$errors[] = 'Inavalid Username / Password';
				}
		}
	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>log in</title>
	<link rel="stylesheet" href="style/main.css">
	<style>
	div.names h1{
  font-family: cursive;
  text-transform: uppercase;
  background-image: url(images/o7Mh_h8m7XI.jpg);
  color:rgba(255,255,255,.1);
  text-align: center;
  font-size: 6em;
  background-repeat: repeat-x;
  -webkit-background-clip:text;
  animation: animate 10s linear infinite
}
@keyframes animate{
  0%
  {
    background-position: left 0px top 80px;
  }
  40%
  {
    background-position: left 800px top 0px;
  } 
  80%
  {
    background-position: left 1800px top 0px;
  } 
  100%
  {
    background-position: left 2400px top 80px;
  } 
}
		body{
			margin: 0;
			padding: 0;
			background-image: url(images/vietnamese-couple-in-traditional-clothes-ao-dai-with-love-mood-in-the-rain-huynh-thu1.jpg);
			background-size: cover;

		}
		/* .rain{
			height: 100vh;
			background: url(images/rain.png);
			animation: rain .3s linear infinite;
		}
		@keyframes rain {
			0%
			{
				background-position: 0% 0%;
			}
			100%
			{
				background-position: 20% 100%;
			}
		}
		@keyframes lighting{
			0%
			{
				opacity: 0;
			}
			10%
			{
				opacity: 0;
			}
			11%
			{
				opacity: 1;
			}
			14%
			{
				opacity: 0;
			}
			20%
			{
				opacity: 0;
			}
			21%
			{
				opacity: 1;
			}
			24%
			{
				opacity: 0;
			}
			104%
			{
				opacity: 0;
			}
		} */
	</style>
</head>
<body>
	<div class="rain">
    <div class="names"><h1>Imagine Movies<h1></div>

	<div class="login">
		<img src="images/user.png" alt="admin">
		<h1>Log In</h1>
		<form action="welcome.php" method="POST">
			<?php
			if(isset($errors) && !empty($errors)){
				echo '<div class="error">Invalid Email or Password</div>';
			}

			?>

			<p>
				<label for="">Admin:</label>
				<input type="text" name="email" id="" placeholder="Email address">
			</p>
			<p>
				<label for="">Password:</label>
				<input type="password" name="password" id="" placeholder="Password">
			</p>
			<p>
				<button type="submit" name="submit">Log In</button>
			</p>


		</form>

	</div>
	</div>
</body>
</html>
<?php mysqli_close($connection); ?>