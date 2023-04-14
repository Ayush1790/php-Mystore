<?php
if (isset($_SESSION))
    session_unset();
if (isset($_COOKIE['isLogin']))
    setcookie("isLogin", "", time() - 3600);
if (isset($_COOKIE['isSign']))
    setcookie("isSign", "", time() - 3600);
header('location:index.php');
?>