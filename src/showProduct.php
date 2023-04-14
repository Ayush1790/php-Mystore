<?php
include 'config.php';
$stmt = "SELECT * FROM `Products`";
$result = mysqli_query($conn, $stmt);
if (mysqli_num_rows($result) > 0) {
    $str = "";
    while ($row = mysqli_fetch_assoc($result)) {
        $str .= "<div class='col-sm-6 col-md-4 col-lg-4'>
        <div class='box'>
        <div class='option_container'>
        <div class='options'>
        <a href='#' class='option1 ' id='cart_$row[id]'>
        Add Cart
        </a>
        <a href='#' class='option1 ' id='wish_$row[id]'>
        Add Wish List 
        </a>
        <a href='#' class='option1 buy' id='all_buy_$row[id]'>
        Buy Now
        </a>
        </div>
        </div>
        <div class='img-box'>
        <img src='images/$row[img]' alt='Image is loading! Please wait'>
        </div>
        <div class='detail-box'>
        <h5>
        $row[name]
        </h5>
        <h6>
        $row[price]
        </h6>
        </div>

        </div>
        
        </div>
        ";
    }
    echo $str;
}
