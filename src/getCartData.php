<?php
if (isset($_COOKIE['isSign']))
    $id = $_COOKIE['isSign'];
else
    $id = $_COOKIE['isLogin'];
$stmt = "SELECT * from `cart` where `user_id`='$id' ";
$result = mysqli_query($conn, $stmt);
if (mysqli_num_rows($result) > 0) {
    $str = "";
    while ($row = mysqli_fetch_assoc($result)) {
        $stmt1 = "SELECT * from `Products` where `id`='$row[product_id]'";
        $res = mysqli_query($conn, $stmt1);
        if (mysqli_num_rows($res) > 0) {
            while ($r = mysqli_fetch_assoc($res)) {
                $str .= "<div class='col-sm-6 col-md-4 col-lg-4'>
                    <div class='box'>
                    
                    <div class='option_container'>
                    
                    <div class='options'>
                    <a href='#' class='option2 move' id='cart_$r[id]'>
                    Wish List
                    </a>
                    <a href='#' class='option2 buy' id='cart_buy_$r[id]'>
                    Buy Now 
                    </a>
                    <button class='delete' id='cart_$r[id]'>X</button>
                    </div>
                    </div>
                    <div class='img-box'>
                    <img src='images/$r[img]' alt='Image is loading! Please wait'>
                    </div>
                    <div class='detail-box'>
                    <h5>
                    $r[name]
                    </h5>
                    <h6>
                    $r[price]
                    </h6>
                    </div>
                    </div>
                    </div>
                    ";
            }
           
        }
      
    }
    echo $str;
}

?>