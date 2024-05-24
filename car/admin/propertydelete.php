<?php
include("config.php");
$pid = $_GET['id'];
$sql = "DELETE FROM vehicle WHERE pid = {$pid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>vehicle Deleted</p>";
	header("Location:propertyview.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>vehicle Not Deleted</p>";
	header("Location:propertyview.php?msg=$msg");
}
mysqli_close($con);
?>