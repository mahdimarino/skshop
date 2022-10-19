<?php

$title = (isset($_POST['title'])) ? $_POST['title'] : NULL;
$description = (isset($_POST['description'])) ? $_POST['description'] : NULL;
$category = (isset($_POST['category'])) ? $_POST['category'] : NULL;
$price = (isset($_POST['price'])) ? $_POST['price'] : NULL;
$image = (isset($_FILES['image'])) ? $_FILES['image'] : NULL;
$size1 = (isset($_POST['size1'])) ? $_POST['size1'] : NULL;
$size2 = (isset($_POST['size2'])) ? $_POST['size2'] : NULL;
$size3 = (isset($_POST['size3'])) ? $_POST['size3'] : NULL;
$size4 = (isset($_POST['size4'])) ? $_POST['size4'] : NULL;
$size5 = (isset($_POST['size5'])) ? $_POST['size5'] : NULL;
$size6 = (isset($_POST['size6'])) ? $_POST['size6'] : NULL;
$size7 = (isset($_POST['size7'])) ? $_POST['size7'] : NULL;
$size8 = (isset($_POST['size8'])) ? $_POST['size8'] : NULL;
$size9 = (isset($_POST['size9'])) ? $_POST['size9'] : NULL;
$size10 = (isset($_POST['size10'])) ? $_POST['size10'] : NULL;



$errors = array();


if ($image) {
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $tmp = explode('.', $file_name);
    $file_ext = strtolower(end($tmp));


    $extensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 20097152) {
        $errors[] = 'File size must be exactly 2 MB';
    }

    if (empty($errors) == true) {
        $image_path =  "products_images/$file_name";
        move_uploaded_file($file_tmp, "../" . $image_path); // not secure

        $sql = "INSERT INTO products(title, description, category, price, image ,`size1`, `size2`, `size3`, `size4`, `size5`, `size6`, `size7`, `size8`, `size9`, `size10`)
         VALUES('$title', '$description', '$category', $price, '$image_path','$size1', '$size2', '$size3', '$size4', '$size5', '$size6', '$size7', '$size8', '$size9', '$size10')";
        $q = mysqli_query($connect, $sql);
    } else {
        print_r($errors);
    }
}


$categories = allCat();

//  $alltaise = alltaise();

?>

<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">title</label>
        <input type="text" name="title" class="form-control" placeholder="title" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">category</label>
        <select class="form-control" id="exampleFormControlSelect1" name="category" required>

            <option value="" selected> Select Your Category</option>
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
        <input type="text" name="price" class="form-control" placeholder="price" required>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
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
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>