<?php

$cid = isset($_GET['q']) ? $_GET['q'] : NULL;
$sql = "SELECT * FROM products WHERE id= $cid limit 1";
$q = mysqli_query($connect, $sql) or die("error");

$num = mysqli_num_rows($q);

if ($num == 1) {
    $data = mysqli_fetch_array($q, MYSQLI_ASSOC);
}

$categories = allCat();
?>

<form method="post" action="edit_product_do.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">title</label>
        <input type="text" name="title" class="form-control" placeholder="<?= $data['title'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">category</label>
        <select class="form-control" id="exampleFormControlSelect1" name="category">

            <option value="<?= $data['category'] ?>" selected> <?= $data['category'] ?></option>
            <?php
            foreach ($categories as $c) {  ?>
                <option value="<?php echo $c["catname"]; ?>"><?php echo $c["catname"]; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">price</label>
        <input type="text" name="price" class="form-control" placeholder="price">

    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">description</label>
        <textarea name="description" id="" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $data['description'] ?></textarea>
    </div>
    <div class="row">
        <div class="col">
            <input type="text" name="size1" class="form-control" placeholder="1">
        </div>
        <div class="col">
            <input type="text" name="size2" class="form-control" placeholder="2">
        </div>
        <div class="col">
            <input type="text" name="size3" class="form-control" placeholder=" 3">
        </div>
        <div class="col">
            <input type="text" name="size4" class="form-control" placeholder="4 ">
        </div>
        <div class="col">
            <input type="text" name="size5" class="form-control" placeholder=" 5">
        </div>
        <div class="col">
            <input type="text" name="size6" class="form-control" placeholder=" 6">
        </div>
        <div class="col">
            <input type="text" name="size7" class="form-control" placeholder=" 7">
        </div>
        <div class="col">
            <input type="text" name="size8" class="form-control" placeholder="8">
        </div>
        <div class="col">
            <input type="text" name="size9" class="form-control" placeholder=" 9">
        </div>
        <div class="col">
            <input type="text" name="size10" class="form-control" placeholder="10">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">product image</label>
        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" required>
    </div>

    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <button type="submit" class="btn btn-primary">Update</button>
</form>