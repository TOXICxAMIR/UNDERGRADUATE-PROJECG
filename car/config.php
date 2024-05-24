<?php
$name= "localhost";
$unmae= "root";
$password= "";
$db_name= "car";
$con = mysqli_connect("localhost","root","","car");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>