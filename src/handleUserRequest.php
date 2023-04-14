<?php
include 'config.php';
if(isset($_POST)){
$stmt="UPDATE `user` set `status`='$_POST[status]',`role`='$_POST[role]' where `id`='$_POST[id]' ";
$result=mysqli_query($conn,$stmt);
if($result){
    echo true;
}else{
    echo false;
}
}
?>