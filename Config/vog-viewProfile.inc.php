<?php
    require_once 'dbConnection.php';

    $sql = "SELECT * FROM docter_details";
    $result = $con->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $doctor_id = $row['doc_id'];
            $doctor_fname = $row['doc_fname'];
            $doctor_mname = $row['doc_mname'];
            $doctor_lname = $row['doc_lname'];
            $doctor_dob = $row['doc_DOB'];
            $doctor_landline = $row['doc_landline'];
            $doctor_mobile = $row['doc_mobile'];
            $doctor_email = $row['doc_email'];
            $doctor_address = $row['doc_address'];
            $doctor_speciality = $row['doc_speciality'];
        }
    }
    else
    {
        echo "0 results";
    }
?>
