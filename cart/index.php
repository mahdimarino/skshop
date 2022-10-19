<?php
session_start();

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart']; // array()

    foreach ($cart as $cart_item) {
        // $cart_item = array(product_id, quantity) Example: array(1, 5)
        $product_id = $cart_item[0];
        $product_qty = $cart_item[1];
        $product_title = $cart_item[2];
        echo "<p>Product ID: $product_id</p>";
        echo "<p>title: $product_title</p>";

        echo "<p>Product quantity: $product_qty</p>";
        echo '<form action="remove_from_cart.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $product_id  . '">';
        echo '<button type="submit">Remove from cart</button>';
        echo '</form>';
        echo "<hr/>";
    }
}
?>


<form action="add_to_cart.php" method="post">
    <input type="text" name="id">
    <input type="text" name="title">
    <input type="number" name="qty">
    <button type="submit">Add</button>
</form>