<?php 
    include "dbConnection.php";

    $child_id = $_GET['child_id'];
    $sql = "SELECT * FROM child_details WHERE child_id = '$child_id'";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $child_name = $row['child_name'];
    $blood_group = $row['blood_group'];
    $allergies = $row['allergies'];
    $mother_name = $row['mother_name'];
    $father_name = $row['fathers_name'];
    $age = $row['child_age'];
    $birth_date = $row['birth_date'];
    $MOH_area = $row['MOH_area'];
    $PHM_area = $row['PHM_area'];
    $field_clinic = $row['field_clinic'];
    $GN_division = $row['GN_division'];
    $hospital_clinic = $row['hospital_clinic'];
    $consultant_obstetrician = $row['consultant_obstetrician'];
    $identified_antatal_risks = $row['identified_antatal_risks'];
    $registration_number = $row['registration_number'];
    $registration_date = $row['registration_date'];
    $phm_id = $row['phm_id'];

    $sql = "SELECT * FROM phm_details WHERE phm_id = '$phm_id'";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $phm_name = $row['phm_name'];


?>