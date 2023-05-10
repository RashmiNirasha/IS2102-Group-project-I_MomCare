<?php

require_once 'dbConnection.php';

$momSql = "SELECT * FROM child_details WHERE phm_id='" . $_SESSION['phm_id'] . "'";
$result = $con->query($momSql);

?>