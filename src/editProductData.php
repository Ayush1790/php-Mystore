<?php
include 'config.php';

if(isset($_POST)){
  $stmt="UPDATE `Products` set `name`='$_POST[name]' ,`qty`='$_POST[qty]',`sale_qty`=$_POST[sqty],`price`='$_POST[price]',`catageory`='$_POST[catageory]',`description`='$_POST[description]' ";
  $result=mysqli_query($conn,$stmt);
  echo $result;
  if($result){
    echo "updated";
  }else{
    echo "error";
  }

}
?>