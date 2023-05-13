<?php
session_start(); // start the session
require_once 'dbConnection.php';

if (isset($_POST['verification-status']) && isset($_POST['reg_user_id'])) {
    $verificationStatus = mysqli_real_escape_string($con, $_POST['verification-status']);
    $userId = mysqli_real_escape_string($con, $_POST['reg_user_id']);

    $updateQuery = "UPDATE registered_user_details SET phm_acceptance='$verificationStatus' WHERE reg_user_id='$userId'";
    $result = mysqli_query($con, $updateQuery);

    if ($result) {
        $_SESSION['success_message'] = "Verification status updated successfully!";
    } else {
        $_SESSION['error_message'] = "Error updating verification status: " . mysqli_error($con);
    }
} else {
    $_SESSION['error_message'] = "Invalid request.";
}

$sql= "SELECT * FROM registered_user_details WHERE reg_user_id='$userId'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$mom_name = $row['first_name'] . " " . $row['last_name'] . " " . $row['middle_name'];
$mom_email = $row['email'];
$password = $row['password'];
$mom_fname=$row['first_name'];
$mom_mname=$row['middle_name'];
$mom_lname=$row['last_name'];
$mom_landline=$row['tele_number'];
$mom_password=$row['password'];
$mom_address=$row['address'];
$mom_DOB=$row['DOB'];
$mom_age=$row['age'];
$mom_regdate=$row['reg_date'];

$password_hash = md5($password);

$mom_id =   "M" .  $userId ;

    $message = "Hi $mom_name! Your Account is now activated , Please log into the system and upon login please create a new password.</br>
    link http://localhost/momcare/mainLogin.php </br>
    your one time password is $password </br>
    Username: $mom_email";
    
    sendemail($mom_email,'Activate Account',$message);

$sql= "INSERT INTO `mother_details`(`mom_id`, `mom_fname`, `mom_mname`, `mom_lname`, `mom_mobile`,`mom_email`, `mom_password`, `mom_address`, `mom_DOB`, `mom_age`, `mom_regdate`) VALUES 
('$mom_id','$mom_fname','$mom_mname','$mom_lname','$mom_landline','$mom_email','$mom_password','$mom_address','$mom_DOB','$mom_age','$mom_regdate')";
$result = mysqli_query($con, $sql);

$rslt="INSERT INTO `user_tbl`(`user_id`,`email`, `password`, `name`, `user_role`) VALUES 
('$mom_id','$mom_email','$password_hash','$mom_fname','mother')";
$result = mysqli_query($con, $rslt);

header("Location: ../View/PHM/phm-handlerequests.php"); // redirect to the page where the table is displayed
exit();


?>
