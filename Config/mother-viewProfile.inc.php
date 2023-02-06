<?php
    require_once 'dbConnection.php';

    $sql = "SELECT * FROM mother_details";
    $result = $con->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $mother_id = $row['mom_id'];
            $mother_fname = $row['mom_fname'];
            $mother_mname = $row['mom_mname'];
            $mother_lname = $row['mom_lname'];
            $mother_dob = $row['mom_DOB'];
            $mother_landline = $row['mom_landline'];
            $mother_mobile = $row['mom_mobile'];
            $mother_email = $row['mom_email'];
            $mother_address = $row['mom_address'];
            $guardian_name = $row['guardian_name'];
            $guardian_mobile = $row['guardian_mobile'];
        }
    }
    else
    {
        echo "0 results";
    }

?>