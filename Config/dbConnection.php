<?php

$servername = "sql12.freesqldatabase.com";
$username = "sql12600925";
$password = "zg4AMtcWnW";
$db = "sql12600925";

$con = new mysqli( $servername, $username, $password, $db);

                     
if ($con->connect_errno) {
    die("Failed to connect to the database!");
}

return $con;
?>