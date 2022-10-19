<!-- Partners -->
<section class="section-wrap partners bg-dark">
    <div class="container">
        <div class="row">

            <div id="owl-partners" class="owl-carousel owl-theme">

                <div class="item">
                    <a href="#">
                        <img src="img/wintsu.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="img/partners/partner_logo_2.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="img/partners/partner_logo_3.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="img/partners/partner_logo_4.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="img/partners/partner_logo_5.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="img/partners/partner_logo_6.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="img/partners/partner_logo_1.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="img/partners/partner_logo_2.png" alt="">
                    </a>
                </div>

            </div> <!-- end carousel -->

        </div>
    </div>
</section> <!-- end partners -->


<!-- Newsletter -->
<!-- <section class="newsletter" id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4>Get the latest updates</h4>
                <form class="relative newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Enter your email">
                    <input type="submit" class="btn btn-lg btn-dark newsletter-submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</section> -->

<!-- Footer Type-1 -->
<footer class="footer footer-type-1">
    <div class="container">
        <div class="footer-widgets">
            <div class="row">

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="widget footer-about-us">
                        <img src="img/wintsu.png" alt="" class="">
                        <p class="mb-30">wintsu Store is the best in the luxary world</p>
                        <div class="footer-socials">
                            <div class="social-icons nobase">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end about us -->

                <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
                    <div class="widget footer-links">
                        <h5 class="widget-title bottom-line left-align grey">contact</h5>
                        <ul class="list-no-dividers">
                            <li><a href="contact-us.php">contact us</a></li>
                            <li>+213795507201</li>
                            <li>diar es saada</li>
                            <li>el madania alger</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="widget footer-links">
                        <h5 class="widget-title bottom-line left-align grey">categories</h5>
                        <ul class="list-no-dividers">
                            <?php

                            $data = allCat();
                            foreach ($data as  $value) :
                            ?>
                                <li><a href="catalog-by-category.php?s=<?= $value['catname'] ?>"><?php echo $value["catname"]; ?></a></li>
                            <?php
                            endforeach;

                            ?>

                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="widget footer-links">
                        <h5 class="widget-title bottom-line left-align grey">about wintsu</h5>
                        <ul class="list-no-dividers">
                            <li><a href="about-us.php">about us</a></li>
                            <!-- <li><a href="faq.html">F&Q</a></li> -->

                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div> <!-- end container -->

    <div class="bottom-footer">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 copyright sm-text-center">
                    <span>
                        &copy; this website, Made by mahdi smahi
                    </span>
                </div>

                <div class="col-sm-6 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-amex"></i>
                </div>

            </div>
        </div>
    </div> <!-- end bottom footer -->
</footer> <!-- end footer -->

<div id="back-to-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</div>

</div> <!-- end content wrapper -->
</main> <!-- end main wrapper -->

<!-- jQuery Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script src="jq.js"></script>
<script src="store.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>


</body>

</html>