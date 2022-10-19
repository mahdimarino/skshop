<?php
session_start();
if (!isset($_SESSION['cart1'])) {
    $_SESSION['cart1'] = array();
}
var_dump($_SESSION['cart1']);

$product_id = isset($_POST['id']) ? $_POST['id'] : NULL;
$product_title = isset($_POST['title']) ? $_POST['title'] : NULL;
$product_price = isset($_POST['price']) ? $_POST['price'] : NULL;
$product_image = isset($_POST['image']) ? $_POST['image'] : NULL;
$product_size = isset($_POST['size']) ? $_POST['size'] : NULL;
$product_qty = isset($_POST['qty']) ? $_POST['qty'] : NULL;
$product_qty = (int)$product_qty;

if ($product_id && $product_qty) {
    $add_new = true;

    foreach ($_SESSION['cart1'] as $cart_item) {
        if ($cart_item[0] == $product_id) {
            $add_new = false;
            $index = array_search(array($cart_item[0], $cart_item[1], $cart_item[2], $cart_item[3], $cart_item[4], $cart_item[5]), $_SESSION['cart1']);
            $_SESSION['cart1'][$index] = array($product_id, $cart_item[1] + $product_qty, $product_title, $product_price, $product_image, $product_size);
            break;
        }
    }

    if ($add_new) {
        $cart_item = array($product_id, $product_qty, $product_title, $product_price, $product_image, $product_size);
        array_push($_SESSION['cart1'], $cart_item);
    }
}

header('Location: ../product-page.php?id=' . $product_id);
//echo $cart_item[5];
