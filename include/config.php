<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'dzshop';

$connect = @mysqli_connect($host, $user, $password, $dbname) or die(mysqli_connect_error($connect));

/*
connect database
*/
