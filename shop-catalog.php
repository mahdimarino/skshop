<?php include 'header.php'; ?>


<!-- Page Title -->
<!-- <section class="page-title text-center bg-light">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">catalog</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="index.html">Shop</a>
                    </li>
                    <li class="active">
                        Catalog
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section> -->

<div class="content-wrapper oh">

    <!-- Catalogue -->
    <section class="section-wrap pt-80 pb-40 catalogue">
        <div class="container relative">

            <!-- Filter -->
            <!-- <div class="shop-filter">
                        <div class="view-mode hidden-xs">
                            <span>View:</span>
                            <a class="grid grid-active" id="grid"></a>
                            <a class="list" id="list"></a>
                        </div>
                        <div class="filter-show hidden-xs">
                            <span>Show:</span>
                            <a href="#" class="active">12</a>
                            <a href="#">24</a>
                            <a href="#">all</a>
                        </div>
                        <form class="ecommerce-ordering">
                            <select>
                                <option value="default-sorting">Default Sorting</option>
                                <option value="price-low-to-high">Price: high to low</option>
                                <option value="price-high-to-low">Price: low to high</option>
                                <option value="by-popularity">By Popularity</option>
                                <option value="date">By Newness</option>
                                <option value="rating">By Rating</option>
                            </select>
                        </form>
                    </div> -->

            <div class="row">
                <div class="col-md-12 catalogue-col right mb-50">
                    <div class="shop-catalogue grid-view">

                        <div class="row items-grid">
                            <?php



                            $data = all();
                            foreach ($data as  $value) :


                            ?>

                                <div class=" col-md-4 col-xs-6 product product-grid">
                                    <div class=" product-item clearfix">
                                        <div class="product-img hover-trigger">
                                            <a class="homeimgcat" href="product-page.php?id=<?php echo $value["id"]; ?>">
                                                <img src="<?php echo $value["image"]; ?>" alt="">
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
                                                <a href="shop-single.html"><?php echo $value["title"]; ?></a>
                                            </h3>
                                            <span class="category">
                                                <a href="product-page.php?id=<?php echo $value["id"]; ?>"><?php echo $value["title"]; ?></a>
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

                                        <div class="product-description">
                                            <h3 class="product-title">
                                                <a href="shop-single.html">Drawstring Dress</a>
                                            </h3>
                                            <span class="price">
                                                <del>
                                                    <span>$730.00</span>
                                                </del>
                                                <ins>
                                                    <span class="amount">$159.99</span>
                                                </ins>
                                            </span>
                                            <span class="rating">
                                                <a href="#">3 Reviews</a>
                                            </span>
                                            <!-- <div class="clear"></div>
                                            <p>Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating
                                                an awesome clothes store with this Theme is easy than you can imagine. Grab this theme now.
                                            </p>
                                            <a href="#" class="btn btn-dark btn-md left"><span>Add to Cart</span></a>
                                            <div class="product-add-to-wishlist">
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                            </div> -->
                                        </div>

                                    </div>
                                </div> <!-- end product -->


                            <?php
                            endforeach; // foreach
                            ?>



                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </section>
</div> <!-- end grid mode -->

<!-- Pagination -->


<?php include 'footer.php'; ?>