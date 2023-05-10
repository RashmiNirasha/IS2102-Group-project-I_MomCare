<?php
//connecting to the database
require_once 'dbConnection.php';

$momSql = "SELECT mom_id, mom_fname, mom_lname, mom_landline, mom_mobile, mom_email, mom_address, mom_age, reg.phm_id as 'phm_id' FROM registered_user_details reg INNER JOIN mother_details mot ON reg.reg_user_id=mot.reg_user_id;";
$result = $con->query($momSql);

?>