<?php
session_start();
if (isset($_POST)) {
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['table'] = $_POST['event'];
   print_r($_SESSION);
}
