<?php 

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "gittest";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "DB onnection failed!";
    exit();
}