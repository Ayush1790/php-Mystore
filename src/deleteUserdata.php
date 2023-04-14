<?php
include 'config.php';
if(isset($_POST)){
    if($_POST['table']=='user'){
    $stmt="Update `$_POST[table]` set `status`='pending' where `id`='$_POST[id]' ";
    $result=mysqli_query($conn,$stmt);
    if($result){
        echo "0";
    }else{
        echo "1";
    }
    }elseif($_POST['table']=='product'){
        $stmt="SELECT * from `order_table` where `product_id`='$_POST[id]'";
        $result=mysqli_query($conn,$stmt);
        if(mysqli_num_rows($result)>0){
           echo "1";
        }else{
            $stmt="DELETE from `Products` where `id`='$_POST[id]'";
            $result=mysqli_query($conn,$stmt);
            echo "0";
        }
      
    }elseif($_POST['table']=='order'){
        $stmt="DELETE from `order-table` where `order_id`='$_POST[id]'";
            $result=mysqli_query($conn,$stmt);
            if($result){
                echo "0";
            }else{
                echo "1";
            }
    }
}
