<?php 
    require_once 'dbConnection.php';
    include("mainLoginModel.php");
    
    $mom_id = $_SESSION['mom_id'];
    echo $mom_id;

    $sql = "SELECT * FROM mcard_general WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $mom_blood_group = $row['blood_group'];
            $mom_bmi = $row['mom_bmi'];
            $mom_height = $row['mom_height'];
            $allergies = $row['allergies'];
            $mom_fullname = $row['mom_name'];
            $mom_age = $row['mom_age'];
            $moh_area = $row['moh_area'];
            $phm_area = $row['phm_area'];
            $clinic_name = $row['clinic_name'];
            $gn_division = $row['gn_division'];
            $hospital_name = $row['hospital_name'];
            $vog_name = $row['VOG_name'];
            $anatal_risks = $row['anatal_risks'];
            $reg_number = $row['reg_number'];
            $reg_date = $row['reg_date'];
            $family_reg = $row['family_reg'];
            $mother_reg = $row['mother_reg'];
            $antenatal_risks = $row['antenatal_risks'];
            $cb1 = $row['cb1'];
            $cb2 = $row['cb2'];
            $cb3 = $row['cb3'];
            $cb4 = $row['cb4'];
            $cb5 = $row['cb5'];
            $cb6 = $row['cb6'];
            $cb7 = $row['cb7'];
            $dad_age = $row['dad_age'];
            $dad_edu = $row['dad_edu'];
            $dad_occupation = $row['dad_occupation'];
            $mom_edu = $row['mom_edu'];
            $mom_occupation = $row['mom_occupation'];

        }}
    else
    {
        echo "0 results";
    }

?>