<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "discussion";
	
	//Create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	
	//Check Connection
	if($conn->connect_error)
	{
		die("Connection Failed:".$conn->connect_error);
	}
	
	echo "Connected Succesfully";
?>