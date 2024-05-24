<?php 

require('config.php');
//require('doctorvalidate.php');

if(isset($_POST['update'])){
    $aid = $_POST['aid'];
    $auser = $_POST['auser'];
    $aemail = $_POST['aemail'];
	$apass = $_POST['apass'];
	$adob = $_POST['adob'];
	$aphone = $_POST['aphone'];
	// $gender = $_POST['gender'];
	

  $sql= "UPDATE `admin` SET `aid` = '$aid', `aemail` = '$aemail', `apass` = '$apass', `adob` = '$adob', `aphone` = '$aphone' WHERE `admin`.`aid` = '$aid' ";
 $result = mysqli_query($con,$sql);

if ($result) {
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('adminlist.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>