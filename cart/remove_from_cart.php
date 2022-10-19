<?php
session_start();

if (isset($_SESSION['cart1'])) {

    $product_id = isset($_POST['id']) ? $_POST['id'] : NULL;

    foreach ($_SESSION['cart1'] as $cart_item) {
        if ($cart_item[0] == $product_id) {
            $index = array_search(array($cart_item[0], $cart_item[1], $cart_item[2], $cart_item[3], $cart_item[4], $cart_item[5]), $_SESSION['cart1']);
            unset($_SESSION['cart1'][$index]);
            $_SESSION['cart1'] = array_values($_SESSION['cart1']);
            break;
        }
    }
}

header('Location: ../shop-cart.php');
