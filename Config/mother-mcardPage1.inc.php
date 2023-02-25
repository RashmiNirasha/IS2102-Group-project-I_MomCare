<?php 
    require_once 'dbConnection.php';

    //session_start();
    $mom_id = $_SESSION['mom_id'];
    
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

        }
    }
    else
    {
        echo "0 results";
    }

    $sql = "SELECT * FROM mcard_fhistory WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row=mysqli_fetch_assoc($result)){
            $diabetes1 = $row['diabetes'];
            $hypertension = $row['hypertension'];
            $h_diseases = $row['h_diseases'];
            $m_pregnancies = $row['m_pregnancies'];
            $fhistory_others = $row['others'];
        }
    }
    else{
        echo "0 results";
    }

    $sql = "SELECT * FROM mcard_medicalhistory WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row=mysqli_fetch_assoc($result)){
            $diabetes2 = $row['diabetes'];
            $hypertension2 = $row['hypertension'];
            $cardiac_d = $row['cardiac_diseases'];
            $renal_d = $row['renal_diseases'];
            $hepatic_d = $row['hepatic_diseases'];
            $psychiatric_d = $row['psychiatric_illnesses'];
            $epilepsy = $row['epilepsy'];
            $malignancies = $row['malignancies'];
            $haematologies = $row['haematologies'];
            $tuberculosis = $row['tuberculosis'];
            $thyroid_d = $row['thyroid_diseases'];
            $bronchial_d = $row['bronchial_diseases'];
            $previous_DVT = $row['previous_DVT'];
            $surgeries_other = $row['surgeries_other_than_LSCS'];
            $mhistory_other = $row['other'];
            $social_zscore = $row['social_zscore'];
        }
    }
    else{
        echo "0 results";
    }

    $sql = "SELECT * FROM mcard_pohistory WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row=mysqli_fetch_assoc($result)){
            $gravidity_G = $row['gravidity_G'];
            $gravidity_P = $row['gravidity_P']; 
            $gravidity_C = $row['gravidity_C'];
            $youngest_child_age = $row['youngest_child_age'];
            $LRMP = $row['LRMP'];
            $EED = $row['EED'];
            $us_eed = $row['us_eed'];
            $poa_at_dating = $row['poa_at_dating'];
            $date_quickning = $row['date_quickning'];
            $poa_at_reg = $row['poa_at_reg'];

        }
    }
    else{
        echo "0 results";
    }

?>