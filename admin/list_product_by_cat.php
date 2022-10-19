<?php
$catname = isset($_GET['s']) ? $_GET['s'] : NULL;
$sql = "SELECT * FROM products WHERE category = '$catname'";
$q = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($q, MYSQLI_ASSOC);

foreach ($data as  $value) {
?>



    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../<?php echo  $value["image"]; ?>" alt="moon">
        <div class="card-body">
            <h3 class=""><?= $value['title'] ?></h3>
            <br>
            <a href="#" class="btn btn-primary">Detail</a>
        </div>
    </div>
<?php
}
?>