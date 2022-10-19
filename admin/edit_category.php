<?php

$cid = isset($_GET['q']) ? $_GET['q'] : NULL;

$sql = "SELECT * FROM category WHERE id= $cid limit 1";

$q = mysqli_query($connect, $sql) or die("error");

$num = mysqli_num_rows($q);

if ($num == 1) {
    $data = mysqli_fetch_array($q, MYSQLI_ASSOC);
}

?>
<form action="edit_category_do.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="catname">Nom</label>
        <input type="text" id="catname" name="catname" class="form-control" value="<?= $data['catname'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">product image</label>
        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" required>
    </div>
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <button type="submit" class="btn btn-primary">Update</button>
</form>