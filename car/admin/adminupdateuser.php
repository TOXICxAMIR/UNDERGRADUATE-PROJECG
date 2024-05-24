<?php 

require('config.php');
//require('doctorvalidate.php');

if(isset($_POST['update'])){
    $uid = $_POST['uid'];
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
	$uphone = $_POST['uphone'];
	$upass = $_POST['upass'];
	$utype = $_POST['utype'];
	$uimage = $_POST['uimage'];
	

  $sql= "UPDATE `user` SET `uid` = '$uid', `uname` = '$uname', `uemail` = '$uemail', `uphone` = '$uphone', `upass` = '$upass', `utype` = '$utype', `uimage` = '$uimage' WHERE `user`.`uid` = '$uid' ";
 $result = mysqli_query($con,$sql);

if ($result) {
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('userlist.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>