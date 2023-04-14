<?php
// add cart
include 'config.php';
session_start();
if (isset($_POST)) {
    if (isset($_COOKIE['isSign']) || isset($_COOKIE['isLogin'])) {
        if (isset($_COOKIE['isSign']))
            $id = $_COOKIE['isSign'];
        else
            $id = $_COOKIE['isLogin'];

        $stmt = "SELECT * FROM  `$_POST[action]` where `user_id`='$id' and `product_id`='$_POST[id]' ";
        $result = mysqli_query($conn, $stmt);
        if (!(mysqli_num_rows($result) > 0)) {
            $stm = "INSERT INTO `$_POST[action]` values('$_POST[id]','$id')";
            $res = mysqli_query($conn, $stm);
        }
    } else {
        print_r($_POST);
        print_r($_SESSION);
        foreach($_SESSION[$_POST['action']]['freshuser'] as $values){
            if($values==$_POST['id']){
                return;
            }
        }
        if (isset($_SESSION[$_POST['action']])) {
            array_push($_SESSION[$_POST['action']]['freshuser'], $_POST['id']);
        } else {
            $_SESSION[$_POST['action']]['freshuser'] = array($_POST['id']);
        }
    }
}
