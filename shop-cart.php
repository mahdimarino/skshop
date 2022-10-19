<?php
include "header.php";
include "include/config.php";

//include "include/functions.php";
/* function buyer($data)
{

  global $connect;
  $sql = "INSERT INTO buyer( buyername,number,adresse,totalprice) 
      VALUES ('{$data['buyername']}','{$data['number']}','{$data['adresse']}','{$data['totalprice']}')";
  $q = mysqli_query($connect, $sql);


  $test_bool = $q ? 'true' : 'false';
  echo "<p>price is $test_bool</p>";
  return $q;
} */

//$data = array();
//$data["buyername"] = (isset($_POST['buyername'])) ? $_POST['buyername'] : NULL;
//$data["number"] = (isset($_POST['number'])) ? $_POST['number'] : NULL;
//$data["adresse"] = (isset($_POST['adresse'])) ? $_POST['adresse'] : NULL;
//$data["totalprice"] = (isset($_POST['totalprice'])) ? $_POST['totalprice'] : NULL;

//$buyername = (isset($_POST['buyername'])) ? $_POST['buyername'] : NULL;
//$number = (isset($_POST['number'])) ? $_POST['number'] : NULL;
//$adresse = (isset($_POST['adresse'])) ? $_POST['adresse'] : NULL;
//$totalprice = (isset($_POST['totalprice'])) ? $_POST['totalprice'] : NULL;
/* $send = (isset($_POST['go'])) ? $_POST['go'] : NULL;

if ($send == 'ok') {

  $q = buyer($data); */
// $sql = "INSERT INTO buyer(buyername, number, adresse, totalprice) VALUES('$buyername', $number, '$adresse', $totalprice )";
// $q = mysqli_query($connect, $sql);




/* if ($q) {
    header("Location:home.php");
  } */
//}




$total_price = 0;
$final_price = 0;




?>





<div class="content-wrapper oh">


  <!-- Cart -->
  <section class="section-wrap shopping-cart">
    <div class="container relative">
      <div class="row">

        <div class="col-md-12">
          <div class="table-wrap mb-30">
            <table class="shop_table cart table">
              <thead>
                <tr>
                  <th class="product-name" colspan="2">Product</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-subtotal" colspan="2">Total</th>
                </tr>
              </thead>
              <tbody>
                <!-- <tr class="cart_item">
                  <td class="product-thumbnail">
                    <a href="#">
                      <img src="img/shop/shop_item_3.jpg" alt="">
                    </a>
                  </td>
                  <td class="product-name">
                    <a href="#">Fashion Shorts</a>
                    <ul>
                      <li>Size: XL</li>
                      <li>Color: White</li>
                    </ul>
                  </td>
                  <td class="product-price">
                    <span class="amount">$1250.00</span>
                  </td>
                  <td class="product-quantity">
                    <div class="quantity buttons_added">
                      <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text">
                      <div class="quantity-adjust">
                        <a href="#" class="plus">
                          <i class="fa fa-angle-up"></i>
                        </a>
                        <a href="#" class="minus">
                          <i class="fa fa-angle-down"></i>
                        </a>
                      </div>
                    </div>
                  </td>
                  <td class="product-subtotal">
                    <span class="amount">$1250.00</span>
                  </td>
                  <td class="product-remove">
                    <a href="#" class="remove" title="Remove this item">
                      <i class="ui-close"></i>
                    </a>
                  </td>
                </tr> -->
                <?php
                //session_start();

                if (isset($_SESSION['cart1'])) {
                  $cart = $_SESSION['cart1']; // array()
                  $total_price = 0;
                  $final_price = 0;

                  foreach ($cart as $cart_item) {
                    // $cart_item = array(product_id, quantity) Example: array(1, 5)
                    $product_id = $cart_item[0];
                    $product_qty = $cart_item[1];
                    $product_title = $cart_item[2];
                    $product_price = $cart_item[3];
                    $product_image = $cart_item[4];
                    $product_size = $cart_item[5];
                    $total = $cart_item[3] * $cart_item[1];
                    $total_price += ($cart_item[3] * $cart_item[1]);
                    $final_price =   $total_price + 500;
                ?>

                    <tr class="cart_item">
                      <input type="hidden" name="id" value="<?php echo $product_id; ?>">

                      <td class="product-thumbnail">
                        <a href="#">
                          <img src="<?php echo $product_image; ?>" alt="">
                        </a>
                      </td>
                      <td class="product-name" name="product_title">
                        <a href="#"><?php echo $product_title; ?></a>
                        <ul>
                          <li>Size: <?php echo $product_size; ?> </li>



                        </ul>
                      </td>
                      <td class="product-price" name="product_price">
                        <span class="amount"><?php echo $product_price; ?></span>
                      </td>

                      <td class="product-quantity">
                        <div class="quantity buttons_added">
                          <input type="number" step="1" min="0" value="<?php echo $product_qty; ?>" title="Qty" name="qty" class="input-text qty text" readonly>


                        </div>
                      </td>
                      <td class="product-subtotal">
                        <span class="amount"><?php echo $total;  ?></span>
                      </td>
                      <form action="cart/remove_from_cart.php" method="POST">

                        <td class="product-remove">
                          <!--  <a href="#" class="remove" type="" title="Remove this item">
                            <i class="ui-close" type="submit"></i>
                          </a> -->
                          <input type="hidden" name="id" value="<?php echo $product_id; ?>">
                          <button type="submit" class="btn btn-sm btn-outline-danger">REMOVE</button>
                        </td>
                      </form>
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>

          <!-- <div class="row mb-50">
            <div class="col-md-5 col-sm-12">
              <div class="coupon">
                <input type="text" name="coupon_code" id="coupon_code" class="input-text form-control" value placeholder="Coupon code">
                <input type="submit" name="apply_coupon" class="btn btn-lg btn-stroke" value="Apply">
              </div>
            </div>

            <div class="col-md-7">
              <div class="actions">
                <input type="submit" name="update_cart" value="Update Cart" class="btn btn-lg btn-stroke">
                <div class="wc-proceed-to-checkout">
                  <a href="checkout.html" class="btn btn-lg btn-dark"><span>proceed to checkout</span></a>
                </div>
              </div>
            </div>
          </div> -->

        </div> <!-- end col -->
      </div> <!-- end row -->
      <form method="post" action="purchase.php" enctype="multipart/form-data">
        <div class="row">
          <!-- end col shipping calculator -->

          <div class="col-md-6">
            <div class="cart_totals">
              <h2 class="heading relative bottom-line full-grey uppercase mb-30">Cart Totals</h2>

              <table class="table shop_table">
                <tbody>
                  <tr class="cart-subtotal">
                    <th>Cart Subtotal</th>
                    <td>
                      <span class="amount"><?php echo $total_price;  ?> DA</span>
                    </td>
                  </tr>
                  <tr class="shipping">
                    <th>Shipping</th>
                    <td>
                      <span>500 DA</span>
                    </td>
                  </tr>
                  <tr class="order-total">
                    <th>Order Total</th>
                    <td>
                      <strong><span class="amount" name="finalprice"><?php echo $final_price;  ?> DA</span></strong>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div> <!-- end col cart totals -->
          <div class="col-md-6 shipping-calculator-form">
            <h2 class="heading relative uppercase bottom-line full-grey mb-30">Calculate Shipping</h2>
            <p class="form-row form-row-wide">
            <div class="col-sm-12">
              <p class="form-row form-row-wide">
                <input type="text" class="input-text" value placeholder="buyername" name="full_name" id="calc_shipping_state">
              </p>
            </div>
            <div class="col-sm-12">
              <p class="form-row form-row-wide">
                <input type="text" class="input-text" value placeholder="number" name="phone_no" id="calc_shipping_state">
              </p>
            </div>
            <!-- <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state" rel="calc_shipping_state">
            <option>Select a country…</option>
            <option value="AF">Afghanistan</option>
            
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
          </select> -->
            </p>


            <div class="col-sm-12">
              <p class="form-row form-row-wide">
                <input type="text" class="input-text" value placeholder="full address" name="address" id="calc_shipping_state">
              </p>
            </div>


            <input type="hidden" name="id" value="<?php echo $product_id; ?> ">
            <input type="hidden" name="image" value="<?php echo $product_image; ?> ">
            <input type="hidden" name="product_title" value="<?php echo $product_title; ?> ">
            <input type="hidden" name="qty" value="<?php echo $product_qty; ?> ">
            <input type="hidden" name="product_price" value="<?php echo $product_price; ?> ">
            <input type="hidden" name="size" value="<?php echo $product_size; ?> ">
            <input type="hidden" name="final_price" value="<?php echo $final_price;  ?> ">


            <p>
              <input type="submit" value="chkoko" name="purchase" class="btn btn-lg btn-stroke mt-10 mb-mdm-40">

            </p>
          </div>

        </div> <!-- end row -->
      </form>

    </div> <!-- end container -->
  </section> <!-- end cart -->


















































  <!-- Newsletter -->
  <?php include 'footer.php'; ?>