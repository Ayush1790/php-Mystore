<?php
include 'config.php';
if (isset($_COOKIE['isSign']) || isset($_COOKIE['isLogin'])) {
} else {
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <link rel="shortcut icon" href="images/favicon.png" type="">
   <title>Famms - Fashion HTML Template</title>
   <!-- bootstrap core css -->
   <!-- font awesome style -->
   <link href="css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="css/responsive.css" rel="stylesheet" />
   <title>Document</title>
</head>

<body>
   <header class="header_section">
      <div class="container">
         <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="showWishList.php">Wish List</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="signin.html">Sign In</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="login.php">Login</a>
                  </li>

                  <form class="form-inline">
                     <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                     </button>
                  </form>
               </ul>
            </div>
         </nav>
      </div>
   </header>
   <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Our <span>Cart</span>
            </h2>
         </div>
         <div class="row" id="showCart">
            <?php
            include 'getCartData.php';
            ?>
         </div>
         <div class="btn-box">
            <a href="index.php">
               View All products
            </a>
         </div>
      </div>
   </section>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="./js/scriptfrontend.js"></script>
<script src="./js/script1.js"></script>



</html>