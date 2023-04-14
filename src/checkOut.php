<?php
include 'config.php';
if (isset($_POST)) {
    $stmt = "SELECT * FROM `Products` where `id`='$_POST[id]'";
    $result = mysqli_query($conn, $stmt);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($_POST['qty'] > 0) {
            if ($row['qty'] >= $_POST['qty']) {
                $stmt1 = "SELECT * FROM `user` where `id`='$_COOKIE[isLogin]'";
                $result1 = mysqli_query($conn, $stmt1);
                $r = mysqli_fetch_assoc($result1);
                $qty = $row['qty'] - $_POST['qty'];
                $sale_qty = $row['sale_qty'] + $_POST['qty'];
                $updateStmt = "UPDATE `Products` set `qty`='$qty',`sale_qty`='$sale_qty' where `id`='$_POST[id]'";
                $res = mysqli_query($conn, $updateStmt);

                $total_price = $_POST['qty'] * $row['price'];
                $date = date('Y-m-d');
                $insertStmt = "INSERT into `order_table` values (null,'$_POST[id]','$_COOKIE[isLogin]','$_POST[qty]','$total_price','place','$date','$r[address]')";
                $res = mysqli_query($conn, $insertStmt);

                $deleteStmt = "DELETE from `cart` where `product_id`='$_POST[id]' and `user_id`='$_COOKIE[isLogin]'";
                $res = mysqli_query($conn, $deleteStmt);

                $deleteStmt = "DELETE from `wish` where `product_id`='$_POST[id]' and `user_id`='$_COOKIE[isLogin]'";
                $res = mysqli_query($conn, $deleteStmt);

                echo "Order Placed Succesfully , Total Amount is $total_price";
            } else {
                echo false;
            }
        } else {
            echo false;
        }
    }
}
