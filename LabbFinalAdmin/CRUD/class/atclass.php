<?php

	$host = "localhost";
	$user = "root";
	$password = " ";
	$database = "db_project";
	
	
	$conn = mysqli_connect('localhost','root');
	
	mysqli_select_db($conn, 'db_project');
	
	if(mysqli_connect_error())
{
	echo "Can not connect";
	
}




?>

