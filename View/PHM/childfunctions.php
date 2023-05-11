<?php
<?php

include '../../Config/dbConnection.php';

function generateChildId()
{
    $num = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
    return 'C' . $num;
}

function childIdExists($id, $con)
{
    $sql = "SELECT * FROM child_details WHERE child_id = '$id'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['child_name']) && isset($_POST['birth_date'])) {
    $child_name = $_POST['child_name'];
    $birth_date = $_POST['birth_date'];
    $child_gender = $_POST['child_gender'];
    $phm_id = $_POST['phm_id'];
    $mom_id = $_POST['mother_id'];
    $moh_area = $_POST['moh_area'];
    $phm_area = $_POST['phm_area'];
    $field_clinic = $_POST['field_clinic'];
    $gn_division = $_POST['gn_division'];
    $hospital_clinic = $_POST['hospital_clinic'];
    $consultant_obstetrician = $_POST['consultant_obstetrician'];
    $risks_conditions = $_POST['risks_conditions'];
    $registration_date = $_POST['registration_date'];
    $blood_group = $_POST['blood_group'];
    $allergies = $_POST['allergies'];

    $child_age = date_diff(date_create($birth_date), date_create('today'))->y . ' years';

    //check if the bithdate is valid
    $birth_date = date('Y-m-d', strtotime($birth_date));
    $registration_date = date('Y-m-d', strtotime($registration_date));
    $today = date('Y-m-d');
    if ($birth_date > $today) {
        echo "Invalid birth date!";
        exit();
    }
    if($registration_date > $today){
        echo "Invalid registration date!";
        exit();
    }

    $sql = "SELECT * FROM `mother_details` WHERE mom_id = '$mom_id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if ($row) {
        $mother_name = $row['mom_fname'] . ' ' . $row['mom_mname'] . ' ' . $row['mom_lname'];
        $mother_email = $row['mom_email'];
        $mother_age = $row['mom_age'];
    } else {
        $mother_name = '';
        $mother_email = '';
        $mother_age = '';
    }
    $registration_number = uniqid(6);

    $sql = "SELECT guardian_id FROM guardian_details WHERE mom_id = '$mom_id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if ($row) {
        $guardian_id = $row['guardian_id'];
    } else {
        $guardian_id = '';
    }

    do {
        $child_id = generateChildId();
    } while (childIdExists($child_id, $con));

    $sql = "INSERT INTO `child_details`(`child_id`, `child_age`, `child_name`, `child_gender`, `phm_id`, `doc_id`, `guardian_id`, `mom_email`, `mom_id`, `birth_date`, `registration_date`, `mother_name`, `mothers_address`, `mother_age`, `fathers_name`, `fathers_age`, `MOH_area`, `PHM_area`, `field_clinic`, `GN_division`, `hospital_clinic`, `consultant_obstetrician`, `identified_antatal_risks`, `registration_number`, `blood_group`, `allergies`) 
    VALUES ('$child_id', '$child_age', '$child_name', '$child_gender', '$phm_id', '', '$guardian_id', '$mother_email', '$mom_id', '$birth_date', '$registration_date', '$mother_name', '', '$mother_age', '', '', '$moh_area', '$phm_area', '$field_clinic', '$gn_division', '$hospital_clinic', '$consultant_obstetrician', '$risks_conditions', '$registration_number', '$blood_group', '$allergies')";



    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<script>alert('Child added successfully!'); window.location.href='child-addchild.php';</script>";
        exit(); // Stop further execution of the script
    } else {
        //display an error message not a script
        echo "Error : " . mysqli_error($con);


      
        exit(); // Stop further execution of the script
            
    }    
    
}


?>
