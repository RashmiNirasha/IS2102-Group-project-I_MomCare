<?php
//connecting to the database
require_once 'dbConnection.php';

$sql = "SELECT doc_id, doc_type, doc_name, doc_age, doc_address, doc_email, doc_tele, doc_workplace FROM doctor_details;";
$result = $con->query($sql);
?>