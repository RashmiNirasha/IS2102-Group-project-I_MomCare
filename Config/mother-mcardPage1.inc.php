<?php 
    require_once 'dbConnection.php';

    //session_start();
    $mom_id = $_GET['mom_id'] ? $_GET['mom_id'] : $_SESSION['mom_id'];
    
    $sql = "SELECT mom_propic FROM mother_details WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row=mysqli_fetch_assoc($result)){
            $mother_propic = $row['mom_propic'];
        }
    }
    else{
        echo "0 results";
    }

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

    // mCard general update query -----------------------------------------------------

    if(isset($_POST['updateMcard_submit'])){
        $mom_id = $_POST['mom_id'];
        $mom_fullname = $_POST['mom_fullname'];
        $mom_age = $_POST['mom_age'];
        $moh_area = $_POST['moh_area'];
        $phm_area = $_POST['phm_area'];
        $clinic_name = $_POST['clinic_name'];
        $gn_division = $_POST['gn_division'];
        $hospital_name = $_POST['hospital_name'];
        $vog_name = $_POST['vog_name'];
        $anatal_risks = $_POST['anatal_risks'];
        $reg_number = $_POST['reg_number'];
        $reg_date = $_POST['reg_date'];
        $family_reg = $_POST['family_reg'];
        $mother_reg = $_POST['mother_reg'];
        $antenatal_risks = $_POST['antenatal_risks'];
        $cb1 = $_POST['cb1'];
        $cb2 = $_POST['cb2'];
        $cb3 = $_POST['cb3'];
        $cb4 = $_POST['cb4'];
        $cb5 = $_POST['cb5'];
        $cb6 = $_POST['cb6'];
        $cb7 = $_POST['cb7'];

        $sql = "UPDATE mcard_general SET mom_name = '$mom_fullname', mom_age = '$mom_age', moh_area = '$moh_area', 
                phm_area = '$phm_area', clinic_name = '$clinic_name', gn_division = '$gn_division', hospital_name = '$hospital_name', 
                VOG_name = '$vog_name', anatal_risks = '$anatal_risks', reg_number = '$reg_number', reg_date = '$reg_date',
                family_reg = '$family_reg', mother_reg = '$mother_reg', antenatal_risks = '$antenatal_risks', cb1 = '$cb1', cb2 = '$cb2',
                cb3 = '$cb3', cb4 = '$cb4', cb5 = '$cb5', cb6 = '$cb6', cb7 = '$cb7' WHERE mom_id = '$mom_id'";
        $result = $con->query($sql);
        if($result){
            echo "<script>alert('Successfully Updated!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
        else{
            echo "<script>alert('Error while updating!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
    }

    if (isset($_POST['personalD_submit'])) {
        $mom_id = $_POST['mom_id'];
        $dad_age = $_POST['dad_age'];
        $dad_edu = $_POST['dad_edu'];
        $dad_occupation = $_POST['dad_occupation'];
        $mom_age = $_POST['mom_age'];
        $mom_edu = $_POST['mom_edu'];
        $mom_occupation = $_POST['mom_occupation'];

        $sql = "UPDATE mcard_general SET dad_age = '$dad_age', dad_edu = '$dad_edu', dad_occupation = '$dad_occupation', 
                mom_age = '$mom_age', mom_edu = '$mom_edu', mom_occupation = '$mom_occupation' WHERE mom_id = '$mom_id'";
        $result = $con->query($sql);
        if($result){
            echo "<script>alert('Successfully Updated!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
        else{
            echo "<script>alert('Error while updating!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
    }


        // ------------------------------------------------------------------------------------------------------------------------------

    $sql = "SELECT * FROM mcard_fhistory WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row=mysqli_fetch_assoc($result)){
            $diabetes = $row['diabetes'];
            $hypertension = $row['hypertension'];
            $h_diseases = $row['h_diseases'];
            $m_pregnancies = $row['m_pregnancies'];
            $fhistory_others = $row['others'];
        }
    }
    else{
        echo "0 results";
    }

    // mCard family update query -----------------------------------------------------

    if (isset($_POST['familyB_submit'])) {
        $mom_id = $_POST['mom_id'];
        $diabetes = $_POST['diabetes'];
        $hypertension = $_POST['hypertension'];
        $h_diseases = $_POST['h_diseases'];
        $m_pregnancies = $_POST['m_pregnancies'];
        $fhistory_others = $_POST['fhistory_others'];

        $sql = "UPDATE mcard_fhistory SET diabetes = '$diabetes', hypertension = '$hypertension', h_diseases = '$h_diseases', 
                m_pregnancies = '$m_pregnancies', others = '$fhistory_others' WHERE mom_id = '$mom_id'";
        $result = $con->query($sql);
        if($result){
            echo "<script>alert('Successfully Updated!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
        else{
            echo "<script>alert('Error while updating!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
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

    // mCard medical update query -----------------------------------------------------

    if (isset($_POST['MsHistory_submit'])) {
        $mom_id = $_POST['mom_id'];
        $diabetes2 = $_POST['diabetes2'];
        $hypertension2 = $_POST['hypertension2'];
        $cardiac_d = $_POST['cardiac_d'];
        $renal_d = $_POST['renal_d'];
        $hepatic_d = $_POST['hepatic_d'];
        $psychiatric_d = $_POST['psychiatric_d'];
        $epilepsy = $_POST['epilepsy'];
        $malignancies = $_POST['malignancies'];
        $haematologies = $_POST['haematologies'];
        $tuberculosis = $_POST['tuberculosis'];
        $thyroid_d = $_POST['thyroid_d'];
        $bronchial_d = $_POST['bronchial_d'];
        $previous_DVT = $_POST['previous_DVT'];
        $surgeries_other = $_POST['surgeries_other'];
        $mhistory_other = $_POST['mhistory_other'];
        $social_zscore = $_POST['social_zscore'];

        $sql = "UPDATE mcard_medicalhistory SET diabetes = '$diabetes2', hypertension = '$hypertension2', cardiac_diseases = '$cardiac_d', 
                renal_diseases = '$renal_d', hepatic_diseases = '$hepatic_d', psychiatric_illnesses = '$psychiatric_d', epilepsy = '$epilepsy', 
                malignancies = '$malignancies', haematologies = '$haematologies', tuberculosis = '$tuberculosis', thyroid_diseases = '$thyroid_d', 
                bronchial_diseases = '$bronchial_d', previous_DVT = '$previous_DVT', surgeries_other_than_LSCS = '$surgeries_other', other = '$mhistory_other', 
                social_zscore = '$social_zscore' WHERE mom_id = '$mom_id'";
        $result = $con->query($sql);
        if($result){
            echo "<script>alert('Successfully Updated!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
        else{
            echo "<script>alert('Error while updating!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
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

    // mCard pregnancy update query -----------------------------------------------------

    if (isset($_POST['PO_History_submit'])) {
        $mom_id = $_POST['mom_id'];
        $gravidity_G = $_POST['gravidity_G'];
        $gravidity_P = $_POST['gravidity_P'];
        $gravidity_C = $_POST['gravidity_C'];
        $youngest_child_age = $_POST['youngest_child_age'];
        $LRMP = $_POST['LRMP'];
        $EED = $_POST['EED'];
        $us_eed = $_POST['us_eed'];
        $poa_at_dating = $_POST['poa_at_dating'];
        $date_quickning = $_POST['date_quickning'];
        $poa_at_reg = $_POST['poa_at_reg'];

        $sql = "UPDATE mcard_pohistory SET gravidity_G = '$gravidity_G', gravidity_P = '$gravidity_P', gravidity_C = '$gravidity_C', 
                youngest_child_age = '$youngest_child_age', LRMP = '$LRMP', EED = '$EED', us_eed = '$us_eed', poa_at_dating = '$poa_at_dating', 
                date_quickning = '$date_quickning', poa_at_reg = '$poa_at_reg' WHERE mom_id = '$mom_id'";
        $result = $con->query($sql);
        if($result){
            echo "<script>alert('Successfully Updated!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
        else{
            echo "<script>alert('Error while updating!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
    }

    $sql = "SELECT * FROM mcard_preghistory WHERE mom_id = '$mom_id'";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row=mysqli_fetch_assoc($result)){
            $pregnancy_type = $row['pregnancy_type'];
            $antenatal = $row['antenatal'];
            $place = $row['place'];
            $outcome = $row['outcome'];
            $weight = $row['weight'];
            $postal_complications = $row['postal_complications'];
            $sex = $row['sex'];
            $age = $row['age'];
        }
    }

    // mCard pregnancy update query -----------------------------------------------------

    if (isset($_POST['Pregnancy_History_submit'])) {
        $mom_id = $_POST['mom_id'];
        $pregnancy_type = $_POST['pregnancy_type'];
        $antenatal = $_POST['antenatal'];
        $place = $_POST['place'];
        $outcome = $_POST['outcome'];
        $weight = $_POST['weight'];
        $postal_complications = $_POST['postal_complications'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];

        $sql = "UPDATE mcard_preghistory SET pregnancy_type = '$pregnancy_type', antenatal = '$antenatal', place = '$place', outcome = '$outcome', weight = '$weight',
        postal_complications = '$postal_complications', sex = '$sex', age = '$age' WHERE mom_id = '$mom_id'";
        $result = $con->query($sql);
        if($result){
            echo "<script>alert('Successfully Updated!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
        else{
            echo "<script>alert('Error while updating!')</script>";
            echo "<script>window.open('mother-motherCardUpdate.php?mom_id=$mom_id','_self')</script>";
        }
    }

    

?>