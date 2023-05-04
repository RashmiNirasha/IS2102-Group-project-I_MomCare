<?php
    require_once '../../Config/dbConnection.php';
    $sql = "SELECT * FROM registered_user_details where phm_acceptance='accepted' and admin_acceptence='pending'";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
?>