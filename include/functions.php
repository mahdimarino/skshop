<?php
//add Product

function addProduct($data)
{
    global $connect;
    $sql = "INSERT INTO `products`(`id`,`nom`,`descs`,`category`,`prix`) 
      VALUES (NULL,'{$data['nom']}','{$data['descs']}',{$data['category']},{$data['prix']})";
    $q = mysqli_query($connect, $sql);
}

/* function contact($hid)
{
    global $connect;
    $sql = "INSERT INTO `contact`(`id`,`fullname`,`phonenumber`,`message`) 
      VALUES (NULL,'{$hid['fullname']}','{$hid['phonenumber']}',{$hid['message']})";
    $q = mysqli_query($connect, $sql);
} */

//add buyer order

/* function buyer($data)
{
    global $connect;
    $sql = "INSERT INTO `buyer`(`id`,`buyername`,`number`,`adresse`,`totalprice`) 
      VALUES (NULL,'{$data['buyername']}','{$data['number']}',{$data['adresse']},{$data['totalprice']})";
    $q = mysqli_query($connect, $sql);
    if ($q)   return 1;
    else return 0;
} */


//add Cat

function addCat($data)
{
    global $connect;
    $sql = "INSERT INTO `category`(`id`,`catname`) 
      VALUES (NULL,'{$data['catname']}')";
    $q = mysqli_query($connect, $sql);
    if ($q)   return 1;
    else return 0;
}





// edit product

// delete category
function deletecategory($cid)
{
    global $connect;
    $sql = "DELETE FROM category WHERE id = $cid";
    $q = mysqli_query($connect, $sql) or die("error");
    if ($q)   return 1;

    return 0;
}




// delete product
function deleteProduct($cid)
{
    global $connect;
    $sql = "DELETE FROM products WHERE id = $cid";
    $q = mysqli_query($connect, $sql) or die("error");
    if ($q)   return 1;

    return 0;
}


//list product

function all()
{
    global $connect;
    $sql = "SELECT * FROM products";
    $q = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($q, MYSQLI_ASSOC);
    return $data;
}



//list Category

function allCat()
{
    global $connect;
    $sql = "SELECT * FROM category";
    $q = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($q, MYSQLI_ASSOC);
    return $data;
}




function productByCat($cid)
{
    global $connect;
    $sql = "SELECT * FROM products WHERE category=$cid";
    $q = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($q, MYSQLI_ASSOC);
    return $data;
}
