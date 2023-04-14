<?php
include 'config.php';
session_start();
// getting data
if (isset($_POST)) {
    $email = $_POST['login_email'];
    $pswd = $_POST['login_pswd'];
}
// taking data from database
$stmt = "SELECT * from `user` where `email`='$email' and `pswd`='$pswd'";
$result = mysqli_query($conn, $stmt);
$row = mysqli_fetch_assoc($result);
if ($row['status'] != 'approved') {
    echo false;
} else {
    setcookie("isLogin", $row['id'], time() + (86400 * 30), "/");
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
}