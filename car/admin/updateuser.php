<?php

require_once('config.php');

function update_user(){
  global $con;
     $sql = "SELECT * FROM user ";
     $result = mysqli_query($con, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       $uid =  $row['uid'];
       $uname =  $row['uname'];
       $uemail = $row['uemail'];
       $uphone = $row['uphone'];
       $upass = $row['upass'];
       $utype = $row['utype'];
       $uimage = $row['uimage'];

       
             
       echo "<tr>
      <form method='post' action='adminupdateuser.php'>
       <td><input type='text' name='uid' value='$uid' size='3' readonly >  </td>
      <td><input type='text' name='uname' value='$uname' size='3' readonly >  </td>
      <td><input type='text' name='uemail' value='$uemail'  size='7'>  </td>
      <td><input type='text' name='uphone' value='$uphone'  size='8'>  </td>
      <td><input type='text' name='upass' value='$upass'  size='3'>  </td>
      <td><input type='text' name='utype' value='$utype'  size='8'>  </td>
      <td><input type='text' name='uimage' value='$uimage'  size='8'>  </td>
       <td><input type='submit' name='update'  class='btn btn-danger' value='Update'>  </td> 
     </form>
             
    </tr>";
     }
}else{
      echo "<script>alert('The record cant be found')</script>";
      //echo "<script>window.open('patientpanel.php', '_self')</script>";
    }
  }
?>