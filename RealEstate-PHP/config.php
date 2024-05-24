<?php
$name= "localhost";
$unmae= "root";
$password= "";
$db_name= "realestatephp";
$con = mysqli_connect("localhost","root","","realestatephp");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>