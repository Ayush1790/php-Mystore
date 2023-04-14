<?php
include 'config.php';
if (isset($_COOKIE['isSign']))
    $id = $_COOKIE['isSign'];
else
    $id = $_COOKIE['isLogin'];
if (isset($_POST)) {
    $stmt = "DELETE from $_POST[event] where `product_id`=$_POST[id] and `user_id`=$id";
    mysqli_query($conn,$stmt);
}
