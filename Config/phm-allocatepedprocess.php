<?php
    require_once "dbConnection.php";

    $ped_query = "SELECT * FROM doctor_details WHERE doc_type='ped';";
    $ped_result = $con->query($ped_query);
?>