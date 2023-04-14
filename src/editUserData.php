<?php
include 'config.php';

if(isset($_POST)){
  $stmt="UPDATE `user` set `name`='$_POST[name]' ,`email`='$_POST[email]',`mob_nu`=$_POST[mob],`pswd`='$_POST[pswd]',`status`='$_POST[status]',`address`='$_POST[addr]' ,`pincode`='$_POST[pin]' ,`role`='$_POST[role]' where `id`='$_POST[id]'";
  $result=mysqli_query($conn,$stmt);
  echo $result;
  if($result){
    echo "updated";
  }else{
    echo "error";
  }

}
?>