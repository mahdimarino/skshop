<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "dzshop");

if (mysqli_connect_error()) {
    echo " <script>
    alert('cannot connect to database');
    window.location.href='mycart.php';
    </script> ";
}



if (isset($_SESSION['cart1'])) {
    $cart = $_SESSION['cart1'];

    foreach ($cart as $cart_item) {
        $product_id = $cart_item[0];
        $product_qty = $cart_item[1];
        $product_title = $cart_item[2];
        $product_price = $cart_item[3];
        $product_image = $cart_item[4];
    }
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['purchase'])) {

        $ypy = "INSERT INTO `order_manager`( `full_name`, `phone_no`, `address`, `final_price`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[final_price]')";
        //var_dump(mysqli_query($con, $ypy));

        if (mysqli_query($con, $ypy)) {
            $order_id = mysqli_insert_id($con);
            $ypy2 = "INSERT INTO `user_orders`(`order_id`, `product_title`, `product_price`, `qty`, `image`) VALUES (?,?,?,?,?)";
            $stmt = mysqli_prepare($con, $ypy2);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "isiis", $order_id, $product_title, $product_price, $qty, $product_image);
                foreach ($_SESSION['cart1'] as $cart_item) {
                    $product_title = $cart_item[2];
                    $product_price = $cart_item[3];
                    $qty = $cart_item[1];
                    $product_image = $cart_item[4];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart1']);
                echo " <script>
                
                window.location.href='shop-cart.php';
                
                </script> ";
            } else {
                echo " <script>
                alert('sql query prepare error');
                window.location.href='shop-cart.php';
                </script> ";
            }
        }
        /*  {
            echo "done";
        }
        else{
            echo " <script>
            alert('sql rerror');
            window.location.href='mycart.php';
            </script> ";
      
        } */
    }
}
