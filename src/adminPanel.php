<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- code for show pending request of users -->
    <div class="container" id='userPendingRequest'>
        <?php
        $stmt = "SELECT * from `user` where `status`='pending' ";
        $result = mysqli_query($conn, $stmt);
        if (mysqli_num_rows($result) > 0) {
            $str = "";
            $str .= "<div class='row'>
            <h1>User's Pending request</h1>
            </div>";
            $str .= "<table class='table table-bordered' <tr>
            <th class=''>User id</th>
            <th class=''>Name</th>
            <th class=''>Email</th>
            <th class=''>Mobile No</th>
            <th class=''>Status</th>
            <th class=''>Role</th>
            <th class=''>Action</th>
            </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $str .= "<tr class='border'>
              <td class=''>$row[id]</td>
              <td class=''>$row[name]</td>
              <td class=''>$row[email]</td>
              <td class=''>$row[mob_nu]</td>
              <td class=''><select id='selectedStatus$row[id]'>
              <option disabled>Select Any one</option>
              <option>Pending</option>
              <option>Approved</option>
              <option>Deny</option>
              </select></td>
              <td class=''><select id='selectedRole$row[id]'>
              <option disabled>Select Any one</option>
              <option selected>user</option>
              </select></td>
              <td class=''><button class='btn btn-primary' onclick=adminUserChange(this.id) id=$row[id]>Submit</button></td>
              </tr>";
            }
            $str .= '</table>';
        }
        echo $str;
        ?>
    </div>
    <!-- Top 5 user based on purchase count -->
    <div class="container" id='top5User'>
        <?php
        $str1 = "";
        $stmt = "SELECT `user_id`,SUM(`total_price`) as `total`,COUNT(`total_price`)as `count` FROM `order_table` GROUP BY `user_id` order by `total` DESC limit 5";
        $result = mysqli_query($conn, $stmt);
        if (mysqli_num_rows($result) > 0) {
            $str1 .= "<div class='row'>
            <h1>Top 5 Users</h1>
            </div> 
            ";
            $str1 .= "<table class='table table-bordered'><tr class='border'>
            <th class=''>User id</th>
            <th class=''>Total Amount</th>
            <th class=''>Purchase Count</th>
            <th class='text-end'> <button class='btn btn-info float-right text-end' onclick=getAllUser()>Check All</button></th>
            </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $str1 .= "<tr class='border'>
              <td class=''>$row[user_id]</td>
              <td class=''>$row[total]</td>
              <td class='' colspan=2>$row[count]</td>
              </tr>";
            }
            $str1 .= "</table>";
        }
        echo $str1;
        ?>
    </div>
    <!-- top 5 products -->

    <div class="container" id='top5Products'>
        <?php
        $str2 = "";
        $stmt = "SELECT * from `Products` order by `sale_qty` desc limit 5 ";
        $result = mysqli_query($conn, $stmt);
        if (mysqli_num_rows($result) > 0) {
            $str2 .= "<div class='row'>
            <div class='col-4'><h1>Top 5 Products</h1></div>
            <div class='col-3'></div>
            </div>";
            $str2 .= "<table class='table table-bordered'><tr class=' border'>
              <th class=''>Product Id</th>
              <th class=''>Product Name</th>
              <th class=''>Remain Quantity</th>
              <th class=''>Sell Quantity</th>
              <th class=''>Price</th>
              <th class='text-end'> <button class='btn btn-info float-right text-end' onclick=getAllProducts()>Check All</button></th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $str2 .= "<tr class='border'>
              <td class=''>$row[id]</td>
              <td class=''>$row[name]</td>
              <td class=''>$row[qty]</td>
              <td class=''>$row[sale_qty]</td>
              <td class='' colspan=2>$row[price]</td></tr> ";
            }
            $str2 .= "</table>";
        }
        echo $str2;
        ?>
    </div>
    <!-- Top 5 orders -->
    <div class="container" id='top5orders'>
        <?php
        $str3 = "";
        $stmt = "SELECT * from `order_table` order by `order_date` desc limit 5 ";
        $result = mysqli_query($conn, $stmt);
        if (mysqli_num_rows($result) > 0) {
            $str3 .= "<div class='row'>
            <h1>Top 5 Orders</h1>
            </div>";
            $str3 .= "<table class='table table-bordered'><tr class=' border'>
              <th class=''>Order Id</th>
              <th class=''>Product Id</th>
              <th class=''>User Id</th>
              <th class=''>Quantity</th>
              <th class=''>Price</th>
              <th class=''>Status</th>
              <th class=''>Order date</th>
              <th class=''>shipping Address</th> <th class='text-end'> <button class='btn btn-info float-right text-end' onclick=getAllOrder()>Check All</button></th>
              </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                $str3 .= "<tr class='border'>
              <td class=''>$row[order_id]</td>
              <td class=''>$row[product_id]</td>
              <td class=''>$row[user_id]</td>
              <td class=''>$row[qty]</td>
              <td class=''>$row[total_price]</td>
              <td class=''>$row[status]</td>
              <td class=''>$row[order_date]</td>
              <td class='' colspan=2>$row[shipping_address]</td>
              </tr> ";
            }
            $str3 .= "</table>";
        }
        echo $str3;
        ?>
    </div>
    <a href='addProduct.html' class='btn btn-primary' id='addProducts'>Add Products</a>
</body>
<script src="./js/script1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
