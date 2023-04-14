<?php
include 'config.php';
if (isset($_POST)) {
   // adding the data in database
   $stmt = "INSERT into `user` values (null,'$_POST[name]','$_POST[email]','$_POST[mob]','$_POST[pswd]','pending','$_POST[address]',$_POST[pin],'user')";
   $result = mysqli_query($conn, $stmt);
   if ($result) {
      $stmt = "SELECT MAX(`id`) as `id` from `user`";
      $result = mysqli_query($conn, $stmt);
      $row = mysqli_fetch_assoc($result);
      //print_r($row['id']);
      setcookie("isSign", $row['id'], time() + (86400 * 30), "/");
      if (isset($_SESSION['cart'])) {
         foreach ($_SESSION['cart']['freshuser'] as $key => $value) {

            $stmt1 = "SELECT * FROM  `cart` where `user_id`='$row[id]' and `product_id`='$value' ";
            $result1 = mysqli_query($conn, $stmt1);
            if (!(mysqli_num_rows($result1) > 0)) {
               $stmt = "INSERT into `cart` values($value,$row[id]) ";
               mysqli_query($conn, $stmt);
            }
         }
      }
      if (isset($_SESSION['wish'])) {
         foreach ($_SESSION['wish']['freshuser'] as $key => $value) {

            $stmt1 = "SELECT * FROM  `wish` where `user_id`='$row[id]' and `product_id`='$value' ";
            $result1 = mysqli_query($conn, $stmt1);
            if (!(mysqli_num_rows($result1) > 0)) {
               $stmt = "INSERT into `wish` values($value,$row[id]) ";
               mysqli_query($conn, $stmt);
            }
         }
      }
      session_unset();
      echo true;
   } else {
      echo false;
   }
}
