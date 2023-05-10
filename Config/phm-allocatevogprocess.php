<?php
    require_once "dbConnection.php";

    $vog_query = "SELECT * FROM doctor_details WHERE doc_type='vog';";
    $vog_result = $con->query($vog_query);
?>