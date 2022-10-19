<table class="table">

    <thead>
        <tr>
            <th scope="col">item image</th>
            <th scope="col">item name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>

        </tr>
    </thead>
    <?php
    $order_id = isset($_GET['s']) ? $_GET['s'] : NULL;
    $query = "SELECT * FROM user_orders WHERE order_id = '$order_id'";
    $q = mysqli_query($connect, $query);
    $data = mysqli_fetch_all($q, MYSQLI_ASSOC);



    foreach ($data as  $value) {
    ?>
        <tbody>
            <tr>

                <td><img src="../<?= $value['image'] ?>" alt="" style="width: 70px; "></td>
                <td><?= $value['product_title'] ?></td>
                <td><?= $value['product_price'] ?></td>
                <td><?= $value['qty'] ?></td>
            </tr>

        </tbody>
    <?php
    }
    ?>
</table>