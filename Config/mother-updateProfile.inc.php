<?php 
    require_once 'dbConnection.php';
    //include("mainLoginModel.php");
    
    $mom_id = $_SESSION['mom_id'];

    if(isset($_POST['mother-profile-update-btn'])){
        $mother_id = $_POST['mom_id'];
        $mother_fullname = $_POST['mom_fullname'];
        $mother_dob = $_POST['mom_dob'];
        $mother_landline = $_POST['mom_landline'];
        $mother_mobile = $_POST['mom_mobile'];
        $mother_email = $_POST['mom_email'];
        $mother_address = $_POST['mom_address'];
        $guardian_name = $_POST['guardian_name'];
        $guardian_mobile = $_POST['guardian_mobile'];

        if (isset($_FILES['mom_propic'])) {
            $profilePic = $_FILES['mom_propic'];
            $profilePicName = $profilePic['name'];
            $profilePicTmpName = $profilePic['tmp_name'];
            $profilePicError = $profilePic['error'];

            if ($profilePicError === 0) {
                $profilePicExt = pathinfo($profilePicName, PATHINFO_EXTENSION);
                $profilePicNewName = "profilePic_" . $mom_id . "." . $profilePicExt;
                $profilePicDestination = "../../Assets/Images/mother/" . $profilePicNewName;
                move_uploaded_file($profilePicTmpName, $profilePicDestination);

                $sql = "UPDATE mother_details SET mom_propic = '$profilePicDestination' WHERE mom_id = '$mom_id'";
                $result = $con->query($sql);
            }
        }

        $sql = "UPDATE mother_details SET mom_DOB = '$mother_dob', mom_landline = '$mother_landline', mom_mobile = '$mother_mobile', mom_email = '$mother_email', mom_address = '$mother_address', guardian_name = '$guardian_name', guardian_mobile = '$guardian_mobile' WHERE mom_id = '$mother_id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script>alert('Profile Updated Successfully!')</script>";
            echo "<script>window.location.href='mother-profileDetails.php'</script>";
        } else {
            echo "<script>alert('Profile Update Failed!')</script>";
            //echo "<script>window.location.href='mother-profileDetails.php'</script>";
        }
    }




    // if(isset($_POST['update-btn'])){
    //     $mother_fname = mysqli_real_escape_string($con, $_POST['mother-fname']);
    //     $mother_mname = mysqli_real_escape_string($con, $_POST['mother-mname']);
    //     $mother_lname = mysqli_real_escape_string($con, $_POST['mother-lname']);
    //     $mother_address = mysqli_real_escape_string($con, $_POST['mother-address']);
    //     $mother_email = mysqli_real_escape_string($con, $_POST['mother-email']);
    //     $mother_mobile = mysqli_real_escape_string($con, $_POST['mother-mobile']);
    //     $mother_landline = mysqli_real_escape_string($con, $_POST['mother-landline']);
    //     $mother_propic = mysqli_real_escape_string($con, $_POST['mother-propic']);
    //     $guardian_name = mysqli_real_escape_string($con, $_POST['guardian-name']);
    //     $guardian_mobile = mysqli_real_escape_string($con, $_POST['guardian-mobile']);

    //     $sql = "UPDATE mother_details SET mom_fname = '$mother_fname', mom_mname = '$mother_mname', mom_lname = '$mother_lname', mom_address = '$mother_address', mom_email = '$mother_email', mom_mobile = '$mother_mobile', mom_landline = '$mother_landline', mom_propic = '$mother_propic', guardian_name = '$guardian_name', guardian_mobile = '$guardian_mobile' WHERE mom_id = '$mother_id'";
    //     echo $sql;
    //     $result = $con->query($sql);

    //     if($result){
    //         header("Location: ../View/mother/mother-profileDetails.php?update=success");
    //         exit();
    //     }
    //     else{
    //         header("Location: ../View/mother/mother-profileUpdate.php?update=failed");
    //         exit();
    //     }
    // }
    
?>