<?php session_start(); ?>
<?php require_once('inc/confrig.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php

  if (!isset($_SESSION['id'])){
  header('Location: welcome.php');
 }
?>

<?php
	if (isset($_GET['image_id'])) {

		$query="SELECT image FROM upload WHERE id='$_GET[image_id]'";
		$result= mysqli_query($connection,$query);
		$row=mysqli_fetch_array($result);
		unlink("uploads/".$row['image']);
		$delquery="DELETE FROM upload WHERE id='$_GET[image_id]'";
		mysqli_query($connection,$delquery);

			header('Location:upload.php?msg=image_deleted');
			}else{

			header('Location:upload.php?err=delete_failed');
	}
?>