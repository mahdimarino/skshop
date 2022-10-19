<?php
include "header.php";
echo "<pre>";
print_r($_SESSION['cart1']);
echo "</pre>";


$product_id = $_GET["id"];
$query = mysqli_query($connect, "SELECT * FROM products where id = $product_id");
$product = mysqli_fetch_assoc($query);


/* $taille_name = $_GET["taille_name"];
$qy = mysqli_query($connect, "SELECT * FROM les_taille where taille_name = $taille_name");
$tille = mysqli_fetch_assoc($qy); */


?>








































<hr>

<div class="content-wrapper oh">

    <!-- Single Product -->
    <section class="section-wrap pb-40 single-product">
        <div class="container-fluid semi-fluid">
            <div class="row">

                <div class="col-md-6 col-xs-12 product-slider mb-60">

                    <div class="flickity  mfp-hover" id="gallery-main">

                        <div class="gallery-cell">
                            <a href="<?php echo $product["image"]; ?>" class="lightbox-img">
                                <img src="<?php echo $product["image"]; ?>" alt="" />
                                <i class="ui-zoom zoom-icon"></i>
                            </a>
                        </div>





                    </div> <!-- end gallery main -->

                    <!-- <div class="gallery-thumbs">
                         <div class="gallery-cell">
                            <img src="img/shop/item_thumb_1.jpg" alt="" />
                        </div>
                        <div class="gallery-cell">
                            <img src="img/shop/item_thumb_2.jpg" alt="" />
                        </div>
                        <div class="gallery-cell">
                            <img src="img/shop/item_thumb_3.jpg" alt="" />
                        </div>
                        <div class="gallery-cell">
                            <img src="img/shop/item_thumb_4.jpg" alt="" />
                        </div> 
                    <div class="gallery-cell">
                        <img src="" alt="" />
                    </div>
                </div> -->
                    <!-- end gallery thumbs -->

                </div> <!-- end col img slider -->

                <div class="col-md-6 col-xs-12 product-description-wrap">
                    <!-- <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="index.html">Shop</a>
                        </li>
                        <li class="active">
                            Catalog
                        </li>
                    </ol> -->
                    <h1 class="product-title"><?= $product['title']; ?></h1>
                    <span class="price">
                        <del>
                            <span>$1550.00</span>
                        </del>
                        <ins>
                            <span class="amount"><?= $product['price'] . "$"; ?></span>
                        </ins>
                    </span>
                    <span class="rating">
                        <a href="#">3 Reviews</a>
                    </span>
                    <p class="short-description"><?= $product['description']; ?></p>

                    <!-- <div class="color-swatches clearfix">
                         <span>Color:</span>
                        <a href="#" class="swatch-violet"></a>
                        <a href="#" class="swatch-black"></a>
                        <a href="#" class="swatch-cream"></a> 
                    </div> -->
                    <br><br>

                    <!-- <h2 name="size" id="h2"></h2> -->
                    <!-- <input name="size" type="hidden" value="mlla"> -->
                    <!-- <div class="size-options clearfix">
                        <span>Size:</span>
                        <a href="#" class="size-xs selected">XS</a>
                        <a href="#" class="size-s">S</a>
                        <a href="#" class="size-m">M</a>
                        <a href="#" class="size-l">L</a>
                        <a href="#" class="size-xl">XL</a>
                    </div> -->


                    <form action="cart/add_to_cart.php" method="post">

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select size</label>
                            <select class="form-control size cd-select" name="size" onChange="myNewFunction(this);" id="exampleFormControlSelect1">
                                <option class="myDiv" value="<?php echo $product["size1"]; ?>"><?php echo $product["size1"]; ?></option>
                                <option class="myDiv" value="<?php echo $product["size2"]; ?>"><?php echo $product["size2"]; ?></option>
                                <option class="myDiv" value="<?php echo $product["size3"]; ?>"><?php echo $product["size3"]; ?></option>
                                <option class="myDiv" value="<?php echo $product["size4"]; ?>"><?php echo $product["size4"]; ?></option>
                                <option class="myDiv" value="<?php echo $product["size5"]; ?>"><?php echo $product["size5"]; ?></option>
                                <option class="myDiv" value="<?php echo $product["size6"]; ?>"><?php echo $product["size6"]; ?></option>
                                <option class="myDiv" value="<?php echo $product["size7"]; ?>"><?php echo $product["size7"]; ?></option>
                                <option class="myDiv" value="<?php echo $product["size8"]; ?>"><?php echo $product["size8"]; ?></option>
                                <option class="myDiv" value="<?php echo $product["size9"]; ?>"><?php echo $product["size9"]; ?></option>
                                <option class="myDiv" value="<?php echo $product["size10"]; ?>"><?php echo $product["size10"]; ?></option>


                            </select>
                        </div>

                        <input type="hidden" name="id" value="<?= $product['id']; ?> ">
                        <input type="hidden" name="title" value="<?= $product['title']; ?> ">
                        <input type="hidden" name="price" value="<?= $product['price']; ?> ">
                        <input type="hidden" name="image" value="<?= $product['image']; ?> ">

                        <div class="product-actions">
                            <span>Qty:</span>

                            <div class="quantity buttons_added">
                                <input type="number" name="qty" step="1" min="0" value="1" title="Qty" class="input-text qty text" />
                                <div class="quantity-adjust">
                                    <a href="#" class="plus">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                    <a href="#" class="minus">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark btn-lg add-to-cart"><span>Add to Cart</span></button>
                    </form>
                    <a href="#" class="product-add-to-wishlist"><i class="fa fa-heart"></i></a>
                </div>


                <div class="product_meta">
                    <!-- <span class="sku">SKU: <a href="#">111763</a></span> -->
                    <span class="brand_as">Category: <a href="#"><?php echo $product["category"]; ?></a></span>
                    <!-- <span class="posted_in">Tags: <a href="#">Sport, T-shirt, Blue</a></span> -->
                </div>

                <!-- Accordion -->
                <!-- <div class="panel-group accordion mb-50" id="accordion">
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="minus">Description<span>&nbsp;</span>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Zenna Theme is a very slick and clean e-commerce template with endless possibilities. Creating an awesome website. Amadea Theme is a very slick and clean e-commerce template with endless possibilities. Creating an awesome website. I would now like to introduce you to your second mind, the hidden and mysterious subconscious.
                                </div>
                            </div>
                        </div> -->

                <!--  <div class="panel">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="plus">Information<span>&nbsp;</span>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table shop_attributes">
                                                <tbody>
                                                    <tr>
                                                        <th>Size:</th>
                                                        <td>EU 41 (US 8), EU 42 (US 9), EU 43 (US 10), EU 45 (US 12)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Colors:</th>
                                                        <td>Violet, Black, Blue</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fabric:</th>
                                                        <td>Cotton (100%)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> -->

                <!-- <div class="panel">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="plus">Reviews<span>&nbsp;</span>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="reviews">
                                                <ul class="reviews-list">
                                                    <li>
                                                        <div class="review-body">
                                                            <div class="review-content">
                                                                <p class="review-author"><strong>Alexander Samokhin</strong> - May 6, 2014 at 12:48 pm</p>
                                                                <div class="rating">
                                                                    <a href="#"></a>
                                                                </div>
                                                                <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="review-body">
                                                            <div class="review-content">
                                                                <p class="review-author"><strong>Christopher Robins</strong> - May 6, 2014 at 12:48 pm</p>
                                                                <div class="rating">
                                                                    <a href="#"></a>
                                                                </div>
                                                                <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                              end reviews 
                                        </div>
                                    </div>
                                </div> -->
            </div>

            <div class="socials-share clearfix">
                <span>Share:</span>
                <div class="social-icons nobase">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div> <!-- end col product description -->
</div> <!-- end row -->

</div> <!-- end container -->
</section> <!-- end single product -->


<!-- Related Products -->
<section class="section-wrap pt-0 shop-items-slider">
    <div class="container">
        <div class="row heading-row">
            <div class="col-md-12 text-center">
                <h2 class="heading bottom-line">
                    you may also like
                </h2>
            </div>
        </div>

        <div class="row">



            <div id="owl-related-items" class="owl-carousel owl-theme">




                <?php


                $data = all();
                foreach ($data as  $value) :


                ?>
                    <div class="product">
                        <div class="product-item hover-trigger">
                            <div class="product-img homeimg">
                                <a class="homeprdct" href="product-page.php?id=<?php echo $value["id"]; ?>">
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
                                    <a href="product-page.php?id=<?php echo $value["id"]; ?>"><?php echo $value["title"]; ?></a>
                                </h3>
                                <span class="category">
                                    <a href="catalogue-grid.html"><?php echo $value["category"]; ?></a>
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






                <!-- <div class="product">
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
                </div> -->







            </div> <!-- end slider -->

        </div>
    </div>
</section> <!-- end related products -->



<?php include 'footer.php'; ?>