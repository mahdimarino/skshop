<?php
$data = allmessages();
?>
<div class="table-responsive">
    <table class="table table-darktable-borderless table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">fullname</th>
                <th scope="col">phone number</th>
                <th scope="col">message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as  $value) :
            ?>
                <tr>
                    <td><?= $value['fullname'] ?></td>
                    <td><?= $value['phonenumber'] ?></td>
                    <td><?= $value['message'] ?></td>

                    <td>
                        <a href="delete_message.php?d=<?= $value['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>