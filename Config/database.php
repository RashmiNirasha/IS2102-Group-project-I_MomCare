<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "momcare";

$mysqli = new mysqli( $servername, $username, $password, $db);

                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;