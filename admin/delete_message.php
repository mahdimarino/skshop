<?php
include "./include/config.php";
include "./include/functions.php";
$cid = isset($_GET['d']) ? $_GET['d'] : NULL;

$is_delete = deletemessage($cid);


if ($is_delete == 1) {
    header("Location:index.php?page=message");
} else {
    echo "Error can not delete ..";
}
