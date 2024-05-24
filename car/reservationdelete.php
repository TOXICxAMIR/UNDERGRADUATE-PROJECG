<?php
include("config.php");
$rid = $_GET['id'];
$sql = "DELETE FROM reservation WHERE rid = {$rid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Reservation Deleted</p>";
	header("Location:reservedproperty.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Reservation Not Deleted</p>";
	header("Location:reservedproperty.php?msg=$msg");
}
mysqli_close($con);
?>