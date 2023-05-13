<?php 
    require_once 'dbConnection.php';

    //session_start();
    $mom_id = $_SESSION['mom_id'];
    
    $sql = "SELECT * FROM mcard_cliniccare WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $mom_clinicdate = $row['dateofclinic'];
            $mom_poa = $row['POA'];
            $mom_urine_sugar = $row['urine_sugar'];
            $mom_urine_albumin= $row['urine_albumin'];
            $mom_pallor = $row['pallor'];
            $mom_oedema_sugar = $row['oedema_sugar'];
            $mom_oedema_albumin = $row['oedema_albumin'];
            $mom_bp = $row['BP'];
            $mom_fh = $row['fundal_height'];
            $mom_fl = $row['foetal_lie'];
            $mom_presentation = $row['presentation'];
            $mom_engagement = $row['engagement'];
            $mom_fm = $row['FM'];
            $mom_fhs = $row['FHS'];
            $mom_iron = $row['iron'];
            $mom_folate = $row['folate'];
            $mom_calcium = $row['calcium'];
            $mom_vitamin = $row['vitamin_c'];
            $mom_food_suppliment = $row['food_supp'];
            $siganture = $row['signature'];
            $designation = $row['designation'];
        }
    }
    else{
        echo "0 results";
    }

    $sql = "SELECT * FROM mcard_dentalclinic WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $mom_refdate = $row['ref_date'];
            $mom_examdate = $row['exam_date'];
            $mom_treatment = $row['treatment'];
        }
    }
    else{
        echo "0 results";
    }

    $sql = "SELECT * FROM mcard_examinations WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $mom_respiratory = $row['respiratory'];
            $mom_breast = $row['breast'];
            $mom_blood_sugar = $row['blood_sugar'];
            $mom_blood_sugarr = $row['blood_sugar_r'];
            $mom_blood_hb = $row['hemoglobin'];
            $mom_blood_hbr = $row['hemoglobin_r'];
            $mom_other = $row['other'];
            $mom_adrugs = $row['antihelminthic_drugs'];
            $mom_dateissued = $row['date_issued'];
            $mom_datehiv = $row['date_hiv_sample'];
            $mom_dateresults = $row['date_results'];
        }
    }
    else{
        echo "0 results";
    }

    $sql = "SELECT * FROM mcard_syphilis WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $mom_POA_sample = $row['POA_sample'];
            $mom_datesample = $row['date_sample'];
            $mom_date_result = $row['date_result'];
            $mom_result = $row['result'];
            $mom_ref = $row['referral'];
        }
    }
    else{
        echo "0 results";
    }
?>