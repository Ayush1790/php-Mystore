<?php
include 'config.php';
session_start();
if (isset($_COOKIE['isLogin'])) {
} else {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <!-- Favicon-->
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>

    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5" id='fillBuyNow'>
            <?php

            // print_r($_SESSION);
            if (isset($_SESSION)) {
                //print_r($_SESSION);
                $stmt = "SELECT * from  `Products` where `id`='$_SESSION[id]'";
                $result = mysqli_query($conn, $stmt);
                //print_r($result);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    // print_r($row);
                    echo  "<div class='row gx-4 gx-lg-5 align-items-center'>
                <div class='col-md-6'>
                <img
                class='card-img-top mb-5 mb-md-0'
                src='images/$row[img]'
                alt='...'
                />
                </div>
                <div class='col-md-6'>
                <div class='small mb-1'>SKU: $row[id]</div>
                <h1 class='display-5 fw-bolder'>$row[name]</h1>
                <div class='fs-5 mb-5'>
                <span class='text-decoration-line-through'>$row[price].00</span>
                <span>$row[price].00</span>
                </div>
                <p class='lead'>
                $row[description]
                </p>
                <div class='d-flex'>
                <input
                class='form-control text-center me-3'
                id='inputQuantity'
                type='num'
                value='1'
                style='width: 5rem'
                />
                <button class='btn btn-outline-dark flex-shrink-0 option1' type='button' id='cart_$row[id]'>

                <i class='bi-cart-fill me-1'></i>
                Add to cart
                </button>
                <button class='btn btn-outline-dark flex-shrink-0 option1' type='button' id='wish_$row[id]'>

                <i class='bi-cart-fill me-1'></i>
                Add to Wish
                </button>
                <button class='btn btn-primary text-end ms-5 checkOut' id='checkOut' >CheckOut</button>
                <input type='hidden' value=$row[id] id='pid'>
                </div>
                </div>
                </div>
                ";
                }
            }
            ?>

        </div>

    </section>

    <!-- Related items section-->

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">
                Copyright &copy; Your Website 2023
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="./js/scriptfrontend.js"></script>

</html>