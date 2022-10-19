<?php
include "./include/config.php";
include "./include/functions.php";

$catname = (isset($_POST['catname'])) ? $_POST['catname'] : NULL;
$cid = (isset($_POST['id'])) ? $_POST['id'] : NULL;
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

    if ($file_size > 7097152) {
        $errors[] = 'File size must be exactly 2 MB';
    }

    if (empty($errors) == true) {
        $image_path =  "products_images/$file_name";
        move_uploaded_file($file_tmp, "../" . $image_path); // not secure
        $sql = "UPDATE category SET catname='$catname' , image='$image_path'   WHERE id = $cid";

        //$sql = "INSERT INTO category(catname,  image) VALUES('$catname',  '$image_path')";
        $q = mysqli_query($connect, $sql);
        header("Location:index.php?page=category_list");
    }
}






//$sql = "UPDATE category SET catname='$catname'   WHERE id = $cid";

//$q = mysqli_query($connect, $sql);

//header("Location:index.php?page=category_list");
