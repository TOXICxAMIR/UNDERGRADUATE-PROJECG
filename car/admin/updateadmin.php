<?php

require_once('config.php');

function update_admin(){
  global $con;
     $sql = "SELECT * FROM admin ";
     $result = mysqli_query($con, $sql);
     $final = mysqli_num_rows($result);
     if($final > 0){
     while ($row=mysqli_fetch_array($result)) {
       $aid =  $row['aid'];
       $auser =  $row['auser'];
       $aemail = $row['aemail'];
       $apass = $row['apass'];
       $adob = $row['adob'];
       $aphone = $row['aphone'];
      //  $gender = $row['gender'];
      //  $password = $row['password'];
       
             
       echo "<tr>
      <form method='post' action='adminupdateadmin.php'>
       <td><input type='text' name='aid' value='$aid' size='3' readonly >  </td>
      <td><input type='text' name='auser' value='$auser' size='3' readonly >  </td>
      <td><input type='text' name='aemail' value='$aemail'  size='7'>  </td>
      <td><input type='text' name='apass' value='$apass'  size='8'>  </td>
      <td><input type='text' name='adob' value='$adob'  size='3'>  </td>
      <td><input type='text' name='aphone' value='$aphone'  size='8'>  </td>
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