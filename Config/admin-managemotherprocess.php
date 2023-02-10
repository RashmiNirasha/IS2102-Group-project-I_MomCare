<?php
//connecting to the database
require_once 'dbConnection.php';

$sql = "SELECT mom_id, mom_fname, mom_lname, mom_age, mom_address, mom_email, mom_mobile, mom_landline, mom_regdate FROM mother_details;";
$result = $con->query($sql);


?>