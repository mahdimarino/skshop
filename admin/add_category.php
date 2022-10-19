<?php

$catname = (isset($_POST['catname'])) ? $_POST['catname'] : NULL;
$image = (isset($_FILES['image'])) ? $_FILES['image'] : NULL;


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

    if ($file_size > 2097152) {
        $errors[] = 'File size must be exactly 2 MB';
    }

    if (empty($errors) == true) {
        $image_path =  "products_images/$file_name";
        move_uploaded_file($file_tmp, "../" . $image_path); // not secure

        $sql = "INSERT INTO category(catname,  image) VALUES('$catname',  '$image_path')";
        $q = mysqli_query($connect, $sql);
    } else {
        print_r($errors);
    }
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="catname">Nom</label>
        <input type="text" id="catname" name="catname" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">product image</label>
        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Category</button>
</form>