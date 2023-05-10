<?php
    require_once '../../Config/dbConnection.php';
    $sql = "SELECT * FROM registered_user_details where phm_acceptance='pending'&&phm_id='".$_SESSION['phm_id']."'";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
?>