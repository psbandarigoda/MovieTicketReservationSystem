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
	$title = '';
	$type = '';
	$duration = '';
	$image = '';

	if(isset($_POST['upload'])){

		$title = $_POST['title'];
		$type = $_POST['type'];
		$duration = $_POST['duration'];
		$image = $_FILES['image']['name'];
		$temp_name = $_FILES['image']['tmp_name'];
		$fileError = $_FILES['image']['error'];
		$fileSize = $_FILES['image']['size'];

		//check required feilds
		 $req_field = array('title','type','duration');

		 foreach ($req_field as $field) {
		 	if(empty(trim($_POST[$field]))){
		 		$errors[] = '- '.$field . ' is required';
		 	}
		 }
		 if(empty($_FILES['image']['name'])){
		 	$errors[] = '- Choose File?';
		 }
		 if(empty($errors)){
				$fileExt = explode('.',$image);
				$fileActualExt = strtolower(end($fileExt));

				$allowed = array('jpg','png','jpeg');
				if (in_array($fileActualExt,$allowed) === false){
					$errors[] = 'You Cannot Upload Files of This Type!';
				}
				if ($fileSize > 1000000){
					$errors[] = 'Your file is too big!';
				}
			}
		 	$upload_to = "uploads/".basename($_FILES['image']['name']);
		 	if(empty($errors)){
		 	$query = "INSERT INTO upload (title,type,image,duration) VALUES ('$title','$type','$image','$duration')";
		 	mysqli_query($connection, $query);

		 	if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_to)) {
		 		header("Location:upload.php?upload=success");
		 		$errors[] = 'Image uploaded successfully!';
		 	}else{
		 		$errors[] = '- There was problem.';

		 	}
		 }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UPLOAD</title>
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/upload.css">
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
    height: 100%;
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
	<div class="back"><a href="home.php"><< </a></div>		
    <div class="name">&nbsp;Imagine Movies</div>
    <div class="loggedin"> <?php echo $_SESSION['name']; ?> 
    <a href="logout.php">Log out</a>
    </div>

  </header>
  <div class="container">
	<div class="upimage">
		<div class="upimghead">
			<h2>Upload Images</h2>
		</div>
		<div class="upimgbody">
		<?php
			if (!empty($errors)){
				echo '<div class="errmsg">';
				echo '<b>There were error(s) on your Upload.</br>';
				foreach ($errors as $error) {
				echo $error . '<br>';
				}
				echo '</div>';
			}
		?>
		<form action="upload.php" method="post" enctype="multipart/form-data" class="uploadform">
		<p>
		<label for="">Title:</label>
		<input type="text" name="title" placeholder="Film Title"<?php echo 'value="' . $title . '"';?>>
		</p>
		<p>			
		<label for="">Type:</label>
		<input type="text" name="type" placeholder="Ex:(Action,Comedy)"<?php echo 'value="' . $type . '"';?>>
		</p>
		<p>
		<label for="">Duration:</label>
		<input type="text" name="duration" placeholder="Ex:(Sep20 - Oct20)"<?php echo 'value="' . $duration . '"';?>>
		</p>
		<p>
		<label for="">&nbsp;</label>
		<input type="file" name="image">
		</p>
		<p>
		<label for="">&nbsp;</label>
		<input type="submit" name="upload" value="UPLOAD">
		</p>
		</form>
		</div>

		<div class="upimggallery clearfix">
			<?php
				$query = "SELECT * FROM upload";
				$result = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_array($result)){
					echo "<div class='tag'>";
					echo "<img src='uploads/".$row['image']."'>";
					echo "<h2>".$row['title']."</h2>";
					echo "<h3>".$row['type']."</h3>";
					echo "<h4>".$row['duration']."</h4>";
					echo "<h5><a href=\"delete-image.php?image_id={$row['id']}\"
                        onclick=\"return confirm('Are You Sure?');\">Delete</a></h5>";
					echo "</div>";
				}

			?>
		</div>
	</div>
  </div>

  
<div class="container">
	<div class="upimage">
		<div class="upimghead">
			<h2>Upload Images</h2>
		</div>
		<div class="upimgbody">
		<?php
			if (!empty($errors)){
				echo '<div class="errmsg">';
				echo '<b>There were error(s) on your Upload.</br>';
				foreach ($errors as $error) {
				echo $error . '<br>';
				}
				echo '</div>';
			}
		?>
		<form action="upload.php" method="post" enctype="multipart/form-data" class="uploadform">
		<p>
		<label for="">Title:</label>
		<input type="text" name="title" placeholder="Film Title"<?php echo 'value="' . $title . '"';?>>
		</p>
		<p>			
		<label for="">Type:</label>
		<input type="text" name="type" placeholder="Ex:(Action,Comedy)"<?php echo 'value="' . $type . '"';?>>
		</p>
		<p>
		<label for="">Duration:</label>
		<input type="text" name="duration" placeholder="Ex:(Sep20 - Oct20)"<?php echo 'value="' . $duration . '"';?>>
		</p>
		<p>
		<label for="">&nbsp;</label>
		<input type="file" name="image">
		</p>
		<p>
		<label for="">&nbsp;</label>
		<input type="submit" name="upload" value="UPLOAD">
		</p>
		</form>
		</div>

		<div class="upimggallery clearfix">
			<?php
				$query = "SELECT * FROM upload";
				$result = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_array($result)){
					echo "<div class='tag'>";
					echo "<img src='uploads/".$row['image']."'>";
					echo "<h2>".$row['title']."</h2>";
					echo "<h3>".$row['type']."</h3>";
					echo "<h4>".$row['duration']."</h4>";
					echo "<h5><a href=\"delete-image.php?image_id={$row['id']}\"
                        onclick=\"return confirm('Are You Sure?');\">Delete</a></h5>";
					echo "</div>";
				}

			?>
		</div>
	</div>
  </div>

</div>
</body>
</html>