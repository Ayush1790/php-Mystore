<?php
include 'config.php';
if (isset($_POST)) {
    $email = $_POST['login_email'];
    $pswd = $_POST['login_pswd'];
    $stmt = "SELECT * from `user` where `email`='$email' and `pswd`='$pswd' and `role`='admin'";
    $result = mysqli_query($conn, $stmt);

    if (mysqli_num_rows($result) > 0) {
        $row=mysqli_fetch_assoc($result);
        setcookie("isAdmin",$row['id']);
        echo true;
    }else{
        echo false;
    }
}
