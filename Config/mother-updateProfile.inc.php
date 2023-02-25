<?php 
    require_once 'dbConnection.php';
    //include("mainLoginModel.php");
    
    session_start();    
    $mom_id = $_SESSION['mom_id'];
    if(isset($_POST['update-btn'])){
        $mother_fname = mysqli_real_escape_string($con, $_POST['mother-fname']);
        $mother_mname = mysqli_real_escape_string($con, $_POST['mother-mname']);
        $mother_lname = mysqli_real_escape_string($con, $_POST['mother-lname']);
        $mother_address = mysqli_real_escape_string($con, $_POST['mother-address']);
        $mother_email = mysqli_real_escape_string($con, $_POST['mother-email']);
        $mother_mobile = mysqli_real_escape_string($con, $_POST['mother-mobile']);
        $mother_landline = mysqli_real_escape_string($con, $_POST['mother-landline']);
        $mother_propic = mysqli_real_escape_string($con, $_POST['mother-propic']);
        $guardian_name = mysqli_real_escape_string($con, $_POST['guardian-name']);
        $guardian_mobile = mysqli_real_escape_string($con, $_POST['guardian-mobile']);

        $sql = "UPDATE mother_details SET mom_fname = '$mother_fname', mom_mname = '$mother_mname', mom_lname = '$mother_lname', mom_address = '$mother_address', mom_email = '$mother_email', mom_mobile = '$mother_mobile', mom_landline = '$mother_landline', mom_propic = '$mother_propic', guardian_name = '$guardian_name', guardian_mobile = '$guardian_mobile' WHERE mom_id = '$mother_id'";
        echo $sql;
        $result = $con->query($sql);

        if($result){
            header("Location: ../View/mother/mother-profileDetails.php?update=success");
            exit();
        }
        else{
            header("Location: ../View/mother/mother-profileUpdate.php?update=failed");
            exit();
        }
    }
    
?>