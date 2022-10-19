<?php
@session_start();
include 'include/functions.php';
include 'include/config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>wintsu</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,400i,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/font-icons.css" />
    <link rel="stylesheet" href="css/sliders.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/app.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/www.gif">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative">

    <!-- Preloader -->
    <!-- <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div> -->

    <main class="main-wrapper">

        <header class="nav-type-1">
            <!-- Fullscreen search -->
            <div class="search-wrap">
                <div class="search-inner">
                    <div class="search-cell">
                        <form method="get">
                            <div class="search-field-holder">
                                <input type="search" class="form-control main-search-input" placeholder="Search for">
                                <i class="ui-close search-close" id="search-close"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end fullscreen search -->

            <!-- Top Bar -->
            <!-- <div class="top-bar hidden-xs">
        <div class="container">
          <div class="top-bar-links flex-parent">
            <ul class="top-bar-currency-language">
              <li>
                Currency: <a href="#">USD<i class="fa fa-angle-down"></i></a>
                <div class="currency-dropdown">
                  <ul>
                    <li><a href="#">USD</a></li>
                    <li><a href="#">EUR</a></li>
                  </ul>
                </div>
              </li>
              <li class="language">
                Language: <a href="#">ENG<i class="fa fa-angle-down"></i></a>
                <div class="language-dropdown">
                  <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Spanish</a></li>
                    <li><a href="#">German</a></li>
                    <li><a href="#">Chinese</a></li>
                  </ul>
                </div>
              </li>
            </ul>

            <ul class="top-bar-acc">
              <li class="top-bar-link"><a href="#">My Wishlist</a></li>
              <li class="top-bar-link"><a href="#">Newsletter</a></li>
              <li class="top-bar-link"><a href="#">Login</a></li>                 
            </ul>

          </div>
        </div>
      </div> -->
            <!-- end top bar -->

            <nav class="navbar navbar-static-top">
                <div class="navigation" id="sticky-nav">
                    <div class="container relative">

                        <div class="row flex-parent">

                            <div class="navbar-header flex-child">
                                <!-- Logo -->
                                <div class="logo-container">
                                    <div class="logo-wrap ">
                                        <a href="home.php">
                                            <img class="logo" src="img/wintsu.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Mobile cart -->
                                <div class="nav-cart mobile-cart hidden-lg hidden-md">
                                    <div class="nav-cart-outer">
                                        <div class="nav-cart-inner">
                                            <a href="shop-cart.php" class="nav-cart-icon">
                                                <span class="nav-cart-badge"><?php
                                                                                if (isset($_SESSION['cart1'])) {
                                                                                    echo count($_SESSION['cart1']);
                                                                                } else {
                                                                                    echo '0';
                                                                                }
                                                                                ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end navbar-header -->

                            <div class="nav-wrap flex-child">
                                <div class="collapse navbar-collapse text-center" id="navbar-collapse">

                                    <ul class="nav navbar-nav">

                                        <li class="dropdown">
                                            <a href="home.php">Home</a>
                                            <!-- <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index-2.html">Home 2</a></li>
                        <li><a href="index-3.html">Home 3</a></li>
                      </ul> -->
                                        </li>

                                        <li class="dropdown">
                                            <a href="contact-us.php">Contact Us</a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="about-us.php">About Us</a>


                                        </li>


                                        <li class="dropdown">
                                            <a href="shop-catalog.php">shop</a>
                                            <i class="fa fa-angle-down dropdown-trigger"></i>
                                            <ul class="dropdown-menu">
                                                <?php

                                                $data = allCat();
                                                foreach ($data as  $value) :
                                                ?>
                                                    <li><a href="catalog-by-category.php?s=<?= $value['catname'] ?>"><?php echo $value["catname"]; ?></a></li>
                                                <?php
                                                endforeach;

                                                ?>
                                            </ul>
                                        </li>



                                        <li class="dropdown">
                                            <a href="shop-catalog.php">catalog</a>


                                        </li> <!-- end elements -->

                                        <!-- <li class="mobile-links hidden-lg hidden-md">
                                            <a href="#">My Account</a>
                                        </li> -->

                                        <!-- Mobile search -->
                                        <!-- <li id="mobile-search" class="hidden-lg hidden-md">
                                            <form method="get" class="mobile-search">
                                                <input type="search" class="form-control" placeholder="Search...">
                                                <button type="submit" class="search-button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </form>
                                        </li> -->

                                    </ul> <!-- end menu -->
                                </div> <!-- end collapse -->
                            </div> <!-- end col -->

                            <div class="flex-child flex-right nav-right hidden-sm hidden-xs">
                                <ul>
                                    <!-- <li class="nav-register">
                                        <a href="#">My Account</a>
                                    </li> -->
                                    <!-- <li class="nav-search-wrap style-2 hidden-sm hidden-xs">
                                        <a href="#" class="nav-search search-trigger">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li> -->
                                    <li class="nav-cart">
                                        <div class="nav-cart-outer">
                                            <div class="nav-cart-inner">
                                                <a href="shop-cart.php" class="nav-cart-icon">
                                                    <?php
                                                    if (isset($_SESSION['cart1'])) {
                                                        echo count($_SESSION['cart1']);
                                                    } else {
                                                        echo '0';
                                                    }
                                                    ?>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- <div class="nav-cart-container">
                                            <div class="nav-cart-items">

                                                <div class="nav-cart-item clearfix">
                                                    <div class="nav-cart-img">
                                                        <a href="#">
                                                            <img src="img/shop/shop_item_1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="nav-cart-title">
                                                        <a href="#">
                                                            Ladies Bag
                                                        </a>
                                                        <div class="nav-cart-price">
                                                            <span>1 x</span>
                                                            <span>1250.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="nav-cart-remove">
                                                        <a href="#" class="remove"><i class="ui-close"></i></a>
                                                    </div>
                                                </div>

                                                <div class="nav-cart-item clearfix">
                                                    <div class="nav-cart-img">
                                                        <a href="#">
                                                            <img src="img/shop/shop_item_2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="nav-cart-title">
                                                        <a href="#">
                                                            Sequin Suit longer title
                                                        </a>
                                                        <div class="nav-cart-price">
                                                            <span>1 x</span>
                                                            <span>1250.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="nav-cart-remove">
                                                        <a href="#" class="remove"><i class="ui-close"></i></a>
                                                    </div>
                                                </div>

                                            </div> 

                                            <div class="nav-cart-summary">
                                                <span>Cart Subtotal</span>
                                                <span class="total-price">$1799.00</span>
                                            </div>

                                            <div class="nav-cart-actions mt-20">
                                                <a href="shop-cart.php" class="btn btn-md btn-dark"><span>View Cart</span></a>
                                                <a href="shop-checkout.html" class="btn btn-md btn-color mt-10"><span>Proceed to
                                                        Checkout</span></a>
                                            </div>
                                        </div> -->
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div> <!-- end navigation -->
            </nav> <!-- end navbar -->
        </header>