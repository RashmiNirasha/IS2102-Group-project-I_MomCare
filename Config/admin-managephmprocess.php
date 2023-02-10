<?php
//connecting to the database
require_once 'dbConnection.php';

$sql = "SELECT phm_id, phm_name, phm_age, phm_address, phm_email, phm_tele, phm_workplace FROM phm_details;";
$result = $con->query($sql);


?>