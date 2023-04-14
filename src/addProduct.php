<?php
// adding products 
include 'config.php';
if(isset($_POST)){
    $imgName=$_FILES['img']['name'];
    $stmt="INSERT into `Products`(`name`,`qty`,`img`,`price`,`category`,`description`,`sale_qty`) values('$_POST[name]','$_POST[qty]','$imgName','$_POST[price]','$_POST[catageory]','$_POST[desc]','0') ";
    $result=mysqli_query($conn,$stmt);
    if($result){
            if (isset($_FILES['img'])) {
                $imgvalue = $_FILES['img'];
                if ($imgvalue['size'] > 0) {
                    $target_dir = "./images/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file); //moving temp location to a specified folder
                   header('location:addProduct.html');
                } else {
                    
                }
            } else {
                
            }
        
    }

}
?>