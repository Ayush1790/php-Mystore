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
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="css/responsive.css" rel="stylesheet" />
   <title>Document</title>
</head>

<body>
   <div class="hero_area">
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
                        <a class="nav-link" href="index.php">Home </a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" href="showCart.php">Cart</a>
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

                     <li class="nav-item">
                        <a class="nav-link" href="logOut.php">Sign Out</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>

      <!-- slider section -->
      <section class="slider_section ">
         <div class="slider_bg_box">
            <img src="images/slider-bg.jpg" alt="">
         </div>
         <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container ">
                     <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                           <div class="detail-box">
                              <h1>
                                 <span>
                                    Sale 20% Off
                                 </span>
                                 <br>
                                 On Everything
                              </h1>
                              <p>
                                 Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                              </p>
                              <div class="btn-box">
                                 <a href="" class="btn1">
                                    Shop Now
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item ">
                  <div class="container ">
                     <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                           <div class="detail-box">
                              <h1>
                                 <span>
                                    Sale 20% Off
                                 </span>
                                 <br>
                                 On Everything
                              </h1>
                              <p>
                                 Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                              </p>
                              <div class="btn-box">
                                 <a href="" class="btn1">
                                    Shop Now
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container ">
                     <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                           <div class="detail-box">
                              <h1>
                                 <span>
                                    Sale 20% Off
                                 </span>
                                 <br>
                                 On Everything
                              </h1>
                              <p>
                                 Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                              </p>
                              <div class="btn-box">
                                 <a href="" class="btn1">
                                    Shop Now
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <ol class="carousel-indicators">
                  <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                  <li data-target="#customCarousel1" data-slide-to="1"></li>
                  <li data-target="#customCarousel1" data-slide-to="2"></li>
               </ol>
            </div>
         </div>
      </section>
      <!-- end slider section -->
   </div>
   <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Our <span>products</span>
            </h2>
         </div>
         <div class="row" id="showProducts">
            <?php
            include 'showProduct.php';
            ?>
         </div>
      </div>
   </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="./js/scriptfrontend.js"></script>
<script src="./js/script1.js"></script>



</html>