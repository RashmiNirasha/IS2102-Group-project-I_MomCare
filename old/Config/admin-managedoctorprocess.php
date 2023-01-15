<?php
//connecting to the database
require_once 'dbSch.php';

$sql = "SELECT doc_name, doc_type, doc_workplace FROM doctor_details;";
$result = $con->query($sql);


?>