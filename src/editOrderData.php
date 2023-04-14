<?php
include 'config.php';

if(isset($_POST)){
  print_r($_POST);
  $stmt="UPDATE `order_table` set `product_id`='$_POST[pid]' ,`user_id`='$_POST[uid]',`qty`=$_POST[qty],`total_price`='$_POST[price]',`status`='$_POST[status]',`order_date`='$_POST[date]' ,`shipping_address`='$_POST[address]' where `order_id`='$_POST[id]'";
  $result=mysqli_query($conn,$stmt);
  echo mysqli_connect_error();
  if($result){
    echo "updated";
  }else{
    echo "error";
  }

}
?>