<?php
include "./include/config.php";
include "./include/functions.php";

$title = (isset($_POST['title'])) ? $_POST['title'] : NULL;
$description = (isset($_POST['description'])) ? $_POST['description'] : NULL;
$category = (isset($_POST['category'])) ? $_POST['category'] : NULL;
$price = (isset($_POST['price'])) ? $_POST['price'] : NULL;
$cid = (isset($_POST['id'])) ? $_POST['id'] : NULL;
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

    if ($file_size > 7097152) {
        $errors[] = 'File size must be exactly 2 MB';
    }

    if (empty($errors) == true) {
        $image_path =  "products_images/$file_name";
        move_uploaded_file($file_tmp, "../" . $image_path); // not secure
        // $sql = "UPDATE category SET catname='$catname' , image='$image_path'   WHERE id = $cid";
        $sql = "UPDATE products SET title='$title' , description ='$description' , category='$category' , price= $price , image='$image_path', size1='$size1', size2='$size2', size3='$size3', size4='$size4', size5='$size5', size6='$size6', size7='$size7', size8='$size8', size9='$size9', size10='$size10'  WHERE id = $cid";


        $q = mysqli_query($connect, $sql);
        header("Location:index.php?page=product_list");
    }
}



/* $sql = "UPDATE products SET title='$title' , description ='$description' , category='$category' , price= $price  WHERE id = $cid";

$q = mysqli_query($connect, $sql) or   die(mysqli_error($connect));

if ($q) {
    header("Location:index.php?page=product_list");
} */
