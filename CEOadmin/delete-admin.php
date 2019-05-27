<?php session_start(); ?>
<?php require_once('inc/confrig.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php

  if (!isset($_SESSION['id'])){
  header('Location: welcome.php');
 }
?>
<?php

	if(isset($_GET['admin_id'])){
		//get admin information
		$admin_id = mysqli_real_escape_string($connection,$_GET['admin_id']);
		
		if($admin_id == $_SESSION['id']){
			//not delete current user
			header('Location:admins.php?err=cannot_delete_current_admin');
		}else{
			//delete admin
			$query = "UPDATE admin SET is_deleted = 1 WHERE id = {$admin_id} LIMIT 1";

			$result = mysqli_query($connection,$query);

			if($result){
				//admin deleted
				header('Location:admins.php?msg=admin_deleted');
			}else{
				header('Location:admins.php?err=delete_failed');
			}
		}
		
	}else{
		header('Location:admins.php');
	}
?>