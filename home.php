<?php include 'header.php'; ?>



<div class="content-wrapper oh">

    <!-- Hero Slider -->
    <section class="hero-wrap relative">
        <div>
            <div class="full-screen-hero">
                <div class="container" id="fs-container">
                    <div class="hero-holder">
                        <div class="hero-message style-2 dark">
                            <div class="hero-text-holder">
                                <h2 class="hero-subtitle">Get now 50% Off</h2>
                                <h1 class="hero-title">Big Sales</h1>
                                <p>Wintsu is super clean and professional store.<br>Suitable for all kind e-commerce website</p>
                                <div class="buttons-holder">
                                    <a href="shop-catalog.php" class="btn btn-lg btn-dark"><span>Shop Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end hero slider -->

    <!-- Promo Banners -->

    <section class="section-wrap promo-banners pb-50">
        <div class="container">
            <div class="row">



                <?php

                $data = allCat();
                foreach ($data as  $value) :

                ?>
                    <div class="col-xs-4 homeimgcat col-xxs-12 mb-30 promo-banner style-2 ">
                        <a class="homeimgcat" href="catalog-by-category.php?s=<?= $value['catname'] ?>">
                            <img src="<?php echo $value["image"]; ?>" alt="">
                            <div class="promo-inner">
                                <h2><?php echo $value["catname"]; ?></h2>
                            </div>
                        </a>
                    </div>


                <?php
                endforeach;

                ?>





            </div>
        </div>
    </section> <!-- end promo banners -->


    <!-- Tabs/Slider Products -->
    <section class="section-wrap pt-0">
        <div class="container-fluid">

            <!-- Tabs -->



            <!-- Tab Content -->
            <div class="tab-content tabs-slider-content">

                <!-- Featured -->
                <div class="tab-pane fade in active" id="featured">

                    <div id="owl-shop-items-slider-1" class="owl-carousel owl-theme">

                        <?php


                        $data = all();
                        foreach ($data as  $value) :


                        ?>
                            <div class="product ">
                                <div class="product-item hover-trigger ">
                                    <div class="product-img homeimg">
                                        <a class="homeprdct" href="product-page.php?id=<?php echo $value["id"]; ?>">
                                            <img class="" src="<?php echo $value["image"]; ?>" alt="">
                                            <img src="<?php echo $value["image"]; ?>" alt="" class="back-img">
                                        </a>
                                        <div class="product-label">
                                            <span class="sale">sale</span>
                                        </div>
                                        <div class="hover-2">
                                            <div class="product-actions">
                                                <a href="#" class="product-add-to-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="product-page.php?id=<?php echo $value["id"]; ?>" class="product-quickview">Quick View</a>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-title">
                                            <a href="product-page.php?id=<?php echo $value["id"]; ?>"><?php echo $value["title"]; ?></a>
                                        </h3>
                                        <span class="category">
                                            <a href="catalog-by-category.php?s=<?= $value['category'] ?>"><?php echo $value["category"]; ?></a>
                                        </span>
                                    </div>
                                    <span class="price">
                                        <del>
                                            <span>$730.00</span>
                                        </del>
                                        <ins>
                                            <span class="amount"><?php echo $value["price"]; ?></span>
                                        </ins>
                                    </span>
                                </div>
                            </div>
                        <?php
                        endforeach; // foreach
                        ?>




                    </div> <!-- end slider -->

                </div> <!-- end featured -->

                <!-- New Items -->
                <div class="tab-pane fade in" id="new-items">

                    <div id="owl-shop-items-slider-2" class="owl-carousel owl-theme">

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_7.jpg" alt="">
                                        <img src="img/shop/shop_item_back_7.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Crew Watch</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Accessories</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$280.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_8.jpg" alt="">
                                        <img src="img/shop/shop_item_back_8.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Jersey Stylish</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Women</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$298.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_3.jpg" alt="">
                                        <img src="img/shop/shop_item_back_3.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Tribal Grey Blazer</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Women</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$330.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_10.jpg" alt="">
                                        <img src="img/shop/shop_item_back_10.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Heathered Scarf</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Accessories</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$180.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_5.jpg" alt="">
                                        <img src="img/shop/shop_item_back_5.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Lola May Crop Blazer</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Women</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$42.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_12.jpg" alt="">
                                        <img src="img/shop/shop_item_back_12.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="product-label">
                                        <span class="sale">sale</span>
                                    </div>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Sport T-shirt</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Men</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <del>
                                        <span>$500.00</span>
                                    </del>
                                    <ins>
                                        <span class="amount">$230.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                    </div> <!-- end slider -->

                </div> <!-- end new items -->

                <!-- Top Rated -->
                <div class="tab-pane fade in" id="top-rated">

                    <div id="owl-shop-items-slider-3" class="owl-carousel owl-theme">
                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_3.jpg" alt="">
                                        <img src="img/shop/shop_item_back_3.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="product-label">
                                        <span class="sale">sale</span>
                                    </div>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Tribal Grey Blazer</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Women</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <del>
                                        <span>$730.00</span>
                                    </del>
                                    <ins>
                                        <span class="amount">$399.99</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_11.jpg" alt="">
                                        <img src="img/shop/shop_item_back_11.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Mantle Brown Bag</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Accessories</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$150.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_6.jpg" alt="">
                                        <img src="img/shop/shop_item_back_6.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Faux Suits</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Men</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$233.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_4.jpg" alt="">
                                        <img src="img/shop/shop_item_back_4.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Sweater w/ Colar</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Men</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$299.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_5.jpg" alt="">
                                        <img src="img/shop/shop_item_back_5.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Lola May Crop Blazer</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Women</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <ins>
                                        <span class="amount">$42.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product-item hover-trigger">
                                <div class="product-img">
                                    <a href="shop-single.html">
                                        <img src="img/shop/shop_item_6.jpg" alt="">
                                        <img src="img/shop/shop_item_back_6.jpg" alt="" class="back-img">
                                    </a>
                                    <div class="product-label">
                                        <span class="sale">sale</span>
                                    </div>
                                    <div class="hover-2">
                                        <div class="product-actions">
                                            <a href="#" class="product-add-to-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="#" class="product-quickview">Quick View</a>
                                </div>
                                <div class="product-details">
                                    <h3 class="product-title">
                                        <a href="shop-single.html">Faux Suits</a>
                                    </h3>
                                    <span class="category">
                                        <a href="catalogue-grid.html">Men</a>
                                    </span>
                                </div>
                                <span class="price">
                                    <del>
                                        <span>$500.00</span>
                                    </del>
                                    <ins>
                                        <span class="amount">$233.00</span>
                                    </ins>
                                </span>
                            </div>
                        </div>

                    </div> <!-- end slider -->

                </div> <!-- end top rated -->


            </div>

        </div>
    </section> <!-- end tabs/slider products -->


    <!-- Promo Section -->
    <section class="section-wrap relative overlay promo-bg" style="background-image: url(img/promo_bg.jpg);">
        <div class="container text-center">
            <div class="table-box">
                <h2 class="uppercase white">autumn collection</h2>
                <p class="uppercase white">prepare for coming winter. Shop All New Items Here</p>
                <a href="#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
            </div>
        </div>
    </section> <!-- end promo section -->


    <!-- From Blog -->
    <!-- <section class="section-wrap from-blog pb-40">
        <div class="container-fluid">

            <div class="row heading-row">
                <div class="col-md-12 text-center">
                    <span class="subheading">Latest News</span>
                    <h2 class="heading bottom-line">
                        From Blog
                    </h2>
                </div>
            </div>

            <div class="row">

                <article class="col-md-4 col-sm-6 col-xs-12 nopadding">
                    <div class="entry-item">
                        <div class="entry-img">
                            <a href="blog-single.html" class="hover-scale">
                                <img src="img/blog/blog_1.jpg" alt="">
                            </a>
                        </div>
                        <div class="entry-wrap">
                            <div class="entry">
                                <h4 class="entry-title"><a href="blog-single.html">Meeting with partners</a></h4>
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        19 Sept, 2017
                                    </li>
                                    <li class="entry-comments">
                                        <i class="fa fa-comment"></i>
                                        <a href="blog-single.html">15 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article> 

                <article class="col-md-4 col-sm-6 col-xs-12 nopadding">
                    <div class="entry-item">
                        <div class="entry-img">
                            <a href="blog-single.html" class="hover-scale">
                                <img src="img/blog/blog_2.jpg" alt="">
                            </a>
                        </div>
                        <div class="entry-wrap">
                            <div class="entry">
                                <h4 class="entry-title"><a href="blog-single.html">The top 10 creative ideas</a></h4>
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        19 Sept, 2017
                                    </li>
                                    <li class="entry-comments">
                                        <i class="fa fa-comment"></i>
                                        <a href="blog-single.html">15 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article> 

                <article class="col-md-4 col-sm-6 col-xs-12 nopadding">
                    <div class="entry-item">
                        <div class="entry-img">
                            <a href="blog-single.html" class="hover-scale">
                                <img src="img/blog/blog_3.jpg" alt="">
                            </a>
                        </div>
                        <div class="entry-wrap">
                            <div class="entry">
                                <h4 class="entry-title"><a href="blog-single.html">How to increase the profit</a></h4>
                                <ul class="entry-meta">
                                    <li class="entry-date">
                                        <i class="fa fa-calendar-o"></i>
                                        19 Sept, 2017
                                    </li>
                                    <li class="entry-comments">
                                        <i class="fa fa-comment"></i>
                                        <a href="blog-single.html">15 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article> 

            </div>
        </div>
    </section> -->
    <!-- end from blog -->


    <?php include 'footer.php'; ?>