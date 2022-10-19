<?php

$data = all();
?>

<div class="table-responsive">
    <table class="table table-darktable-borderless table-hover">

        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Category</th>
                <th scope="col">Prix</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as  $value) :
            ?>
                <tr>
                    <td><?= $value['title'] ?></td>
                    <td><?= $value['category'] ?></td>
                    <td><?= $value['price'] ?></td>
                    <td>
                        <a href="index.php?page=edit_product&q=<?= $value['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="delete_product.php?d=<?= $value['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>


</div>