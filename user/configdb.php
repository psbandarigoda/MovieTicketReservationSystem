<?php
	$server="localhost";
	$username="root";
	$password="";
	$database="data";
	
	$conn=new mysqli($server,$username,$password,$database);
	
	if($conn->connect_error)
	{
		echo"Error!";
	}
	else
	{
		echo"";
	}

?>