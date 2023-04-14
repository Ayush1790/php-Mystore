<?php
include 'config.php';
if (isset($_POST)) {
    if (isset($_COOKIE['isSign']))
        $id = $_COOKIE['isSign'];
    else
        $id = $_COOKIE['isLogin'];
    if ($_POST['action'] == 'cart') {
        $move = 'wish';
    } else {
        $move = 'cart';
    }
    $stmt = "SELECT * FROM  `$move` where `user_id`='$id' and `product_id`='$_POST[id]' ";
    $result = mysqli_query($conn, $stmt);
    if (!(mysqli_num_rows($result) > 0)) {
        if ($_POST['action'] == 'cart') {
            $stmt = "INSERT into `wish` values('$_POST[id]','$id')";
        } else
            $stmt = "INSERT into `cart` values('$_POST[id]','$id')";
        $re = mysqli_query($conn, $stmt);
        echo "inserted";
    }
    $stmt = "DELETE from `$_POST[action]` where `user_id`='$id'";
    $res = mysqli_query($conn, $stmt);
    if ($res)
        echo "deleted";
}