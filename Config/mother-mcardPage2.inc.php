<?php 
    require_once 'dbConnection.php';

    //session_start();
    $mom_id = $_GET['mom_id'] ? $_GET['mom_id'] : $_SESSION['mom_id'];
    
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

    // clinic care query --------------------------------------------------------------

    if (isset($_POST['clinicCare_submit'])) {
        $mom_clinicdate = $_POST['mom_clinicdate'];
        $mom_poa = $_POST['mom_poa'];
        $mom_urine_sugar = $_POST['mom_urine_sugar'];
        $mom_urine_albumin = $_POST['mom_urine_albumin'];
        $mom_pallor = $_POST['mom_pallor'];
        $mom_oedema_sugar = $_POST['mom_oedema_sugar'];
        $mom_oedema_albumin = $_POST['mom_oedema_albumin'];
        $mom_bp = $_POST['mom_bp'];
        $mom_fh = $_POST['mom_fh'];
        $mom_fl = $_POST['mom_fl'];
        $mom_presentation = $_POST['mom_presentation'];
        $mom_engagement = $_POST['mom_engagement'];
        $mom_fm = $_POST['mom_fm'];
        $mom_fhs = $_POST['mom_fhs'];
        $mom_iron = $_POST['mom_iron'];
        $mom_folate = $_POST['mom_folate'];
        $mom_calcium = $_POST['mom_calcium'];
        $mom_vitamin = $_POST['mom_vitamin'];
        $mom_food_suppliment = $_POST['mom_food_suppliment'];
        $siganture = $_POST['siganture'];
        $designation = $_POST['designation'];

        $sql = "UPDATE mcard_cliniccare SET dateofclinic='$mom_clinicdate', POA='$mom_poa', urine_sugar='$mom_urine_sugar', 
                urine_albumin='$mom_urine_albumin', pallor='$mom_pallor', oedema_sugar='$mom_oedema_sugar', 
                oedema_albumin='$mom_oedema_albumin', BP='$mom_bp', fundal_height='$mom_fh', foetal_lie='$mom_fl', 
                presentation='$mom_presentation', engagement='$mom_engagement', FM='$mom_fm', FHS='$mom_fhs', 
                iron='$mom_iron', folate='$mom_folate', calcium='$mom_calcium', vitamin_c='$mom_vitamin', 
                food_supp='$mom_food_suppliment', signature='$siganture', designation='$designation' WHERE mom_id='$mom_id'";

        $result = $con->query($sql);

        if ($result) {
            echo "<script>alert('Clinic Care details updated successfully!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        } else {
            echo "<script>alert('Error in updating Clinic Care details!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        }
    }

    $sql = "SELECT * FROM mcard_auscultation WHERE mom_id = '$mom_id'";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            while($row=mysqli_fetch_assoc($result)){
                $test_id = $row['id'];
                $auscultation = $row['auscultation'];
                $mental_health = $row['mental_health'];
            }
        }
        else{
            echo "0 results";
        }

    // auscultation query --------------------------------------------------------------

    if (isset($_POST['auscultation_submit'])) {
        $auscultation = $_POST['auscultation'];
        $mental_health = $_POST['mental_health'];

        $sql = "INSERT INTO mcard_auscultation (mom_id, auscultation, mental_health) VALUES ('$mom_id', '$auscultation', '$mental_health')";

        $result = $con->query($sql);

        if ($result) {
            echo "<script>alert('Auscultation details updated successfully!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        } else {
            echo "<script>alert('Error in updating Auscultation details!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        }
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

    // dental clinic query --------------------------------------------------------------

    if(isset($_POST['dentalCare_submit'])) {
        $mom_refdate = $_POST['mom_refdate'];
        $mom_examdate = $_POST['mom_examdate'];
        $mom_treatment = $_POST['mom_treatment'];

        $sql = "UPDATE mcard_dentalclinic SET ref_date='$mom_refdate', exam_date='$mom_examdate', treatment='$mom_treatment' WHERE mom_id='$mom_id'";

        $result = $con->query($sql);

        if ($result) {
            echo "<script>alert('Dental Clinic details updated successfully!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        } else {
            echo "<script>alert('Error in updating Dental Clinic details!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        }
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

    // examinations query --------------------------------------------------------------

    if(isset($_POST['Resp_submit'])) {
        $mom_respiratory = $_POST['mom_respiratory'];

        $sql = "UPDATE mcard_examinations SET respiratory='$mom_respiratory' WHERE mom_id='$mom_id'";
        $result = $con->query($sql);
        if ($result) {
            echo "<script>alert('Respiratory details updated successfully!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        } else {
            echo "<script>alert('Error in updating Respiratory details!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        }
    }
// breast Exam query --------------------------------------------------------------

    if(isset($_POST['BreastD_submit'])) {
        $mom_breast = $_POST['mom_breast'];

        $sql = "UPDATE mcard_examinations SET breast='$mom_breast' WHERE mom_id='$mom_id'";
        $result = $con->query($sql);
        if ($result) {
            echo "<script>alert('Breast details updated successfully!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        } else {
            echo "<script>alert('Error in updating Breast details!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        }
    } 

    // investigations query --------------------------------------------------------------

    if(isset($_POST['Investigations_submit'])) {
        $mom_blood_sugar = $_POST['mom_blood_sugar'];
        $mom_blood_sugarr = $_POST['mom_blood_sugarr'];
        $mom_blood_hb = $_POST['mom_blood_hb'];
        $mom_blood_hbr = $_POST['mom_blood_hbr'];
        $mom_other = $_POST['mom_other'];
        $mom_adrugs = $_POST['mom_adrugs'];
        $mom_dateissued = $_POST['mom_dateissued'];
        $mom_datehiv = $_POST['mom_datehiv'];
        $mom_dateresults = $_POST['mom_dateresults'];

        $sql = "UPDATE mcard_examinations SET blood_sugar='$mom_blood_sugar', blood_sugar_r='$mom_blood_sugarr', 
                hemoglobin='$mom_blood_hb', hemoglobin_r='$mom_blood_hbr', other='$mom_other', antihelminthic_drugs='$mom_adrugs', 
                date_issued='$mom_dateissued', date_hiv_sample='$mom_datehiv', date_results='$mom_dateresults' 
                WHERE mom_id='$mom_id'";

        $result = $con->query($sql);

        if ($result) {
            echo "<script>alert('Investigations details updated successfully!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        } else {
            echo "<script>alert('Error in updating Investigations details!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        }
        
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

    // syphilis query --------------------------------------------------------------

    if(isset($_POST['Syphilis_submit'])) {
        $mom_POA_sample = $_POST['mom_POA_sample'];
        $mom_datesample = $_POST['mom_datesample'];
        $mom_date_result = $_POST['mom_date_result'];
        $mom_result = $_POST['mom_result'];
        $mom_ref = $_POST['mom_ref'];

        $sql = "UPDATE mcard_syphilis SET POA_sample='$mom_POA_sample', date_sample='$mom_datesample', 
                date_result='$mom_date_result', result='$mom_result', referral='$mom_ref' WHERE mom_id='$mom_id'";

        $result = $con->query($sql);

        if ($result) {
            echo "<script>alert('Syphilis details updated successfully!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        } else {
            echo "<script>alert('Error in updating Syphilis details!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        }
        
    }

    $sql = "SELECT * FROM mcard_tetanus WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row=mysqli_fetch_assoc($result)){
            $mom_tetanus_dose = $row['dose'];
            $mom_tetanus_date = $row['date'];
            $mom_tetanus_batch = $row['batch_no'];
        }
    }
    else{
        echo "0 results";
    }

    // tetanus query --------------------------------------------------------------

    if (isset($_POST['Tetanus_submit'])) {
        $mom_tetanus_dose = $_POST['mom_tetanus_dose'];
        $mom_tetanus_date = $_POST['mom_tetanus_date'];
        $mom_tetanus_batch = $_POST['mom_tetanus_batch'];

        $sql = "UPDATE mcard_tetanus SET dose='$mom_tetanus_dose', date='$mom_tetanus_date', batch_no='$mom_tetanus_batch' WHERE mom_id='$mom_id'";

        $result = $con->query($sql);

        if ($result) {
            echo "<script>alert('Tetanus details updated successfully!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        } else {
            echo "<script>alert('Error in updating Tetanus details!')</script>";
            echo "<script>window.open('mother-mcardPage2.php?mom_id=$mom_id','_self')</script>";
        }
    }
?>