<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">order id</th>
            <th scope="col">customer name</th>
            <th scope="col">phone no</th>
            <th scope="col">address</th>
            <th scope="col">total price</th>
            <th scope="col">orders</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM `order_manager`";
        $user_result = mysqli_query($connect, $query);
        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
            echo "
                           <tr>
                            
                           <td>$user_fetch[order_id]</td>
                           <td>$user_fetch[full_name]</td>
                           <td>$user_fetch[phone_no]</td>
                           <td>$user_fetch[address]</td>
                           <td>$user_fetch[final_price] DA</td>
                           <td>
                           <a href='index.php?page=buyer_order&s= $user_fetch[order_id] ' class='btn btn-primary'>View orders</a>
                           </td>
                           <td>
                           <a href='delete_order.php?d= $user_fetch[order_id] ' class='btn btn-danger'>Delete</a>
                       </td>
                       </tr>
                        ";
        }
        ?>

    </tbody>
</table>