<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$db = "momcare";

// Create database connection
$db = new mysqli($servername, $username, $password, $db);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>