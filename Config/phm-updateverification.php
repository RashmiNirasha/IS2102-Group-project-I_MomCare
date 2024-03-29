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

header("Location: ../View/PHM/phm-handlerequests.php"); // redirect to the page where the table is displayed
exit();
?>
