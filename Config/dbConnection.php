<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "mom_care";

$con = new mysqli( $servername, $username, $password, $db);

                     
if ($con->connect_errno) {
    die("Failed to connect to the database!");
}

return $con;
?>