<?php
include 'config.php';

if(isset($_POST)){
  echo "editProduct";
  print_r($_POST);
  $stmt="UPDATE `Products` set `name`='$_POST[name]' ,`qty`='$_POST[qty]',`sale_qty`=$_POST[sqty],`price`='$_POST[price]',`category`='$_POST[catageory]',`description`='$_POST[desc]' where `id`='$_POST[id]'";
  echo $stmt;
  $result=mysqli_query($conn,$stmt);
  echo $result;
  if($result){
    echo "updated";
  }else{
    echo "error";
  }

}
?>