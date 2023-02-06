<?php 
    require_once 'dbConnection.php';

    $sql = "UPDATE mother_details SET mom_fname = '$_POST[fname]', mom_mname = '$_POST[mname]', mom_lname = '$_POST[sname]', mom_DOB = '$_POST[BOD]', mom_landline = '$_POST[tele]', mom_mobile = '$_POST[tele]', mom_email = '$_POST[email]', mom_address = '$_POST[address]', guardian_name = '$_POST[fname]', guardian_mobile = '$_POST[tele]' WHERE mom_id = '$_POST[mom_id]'";
    $result = $con->query($sql);

    
?>