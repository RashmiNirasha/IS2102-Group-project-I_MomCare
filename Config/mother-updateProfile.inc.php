<?php 
    require_once 'dbConnection.php';

    if(isset($_POST['submit'])){
        $mother_id = $_POST['mother-id'];
        $mother_fname = $_POST['mother-fname'];
        $mother_mname = $_POST['mother-mname'];
        $mother_lname = $_POST['mother-lname'];
        $mother_address = $_POST['mother-address'];
        $mother_email = $_POST['mother-email'];
        $mother_mobile = $_POST['mother-mobile'];
        $mother_landline = $_POST['mother-landline'];
        $mother_propic = $_POST['mother-propic'];
        $guardian_name = $_POST['guardian-name'];
        $guardian_mobile = $_POST['guardian-mobile'];

        $sql = "UPDATE mother_details SET mom_fname = '$mother_fname', mom_mname = '$mother_mname', mom_lname = '$mother_lname', mom_address = '$mother_address', mom_email = '$mother_email', mom_mobile = '$mother_mobile', mom_landline = '$mother_landline', mom_propic = '$mother_propic', guardian_name = '$guardian_name', guardian_mobile = '$guardian_mobile' WHERE mother_id = '$mother_id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: ../View/Mother/mother-profileUpdate.php?update=success");
            exit();
        }else{
            header("Location: ../View/Mother/mother-profileUpdate.php?update=failed");
            exit();
        }
    }
    
?>