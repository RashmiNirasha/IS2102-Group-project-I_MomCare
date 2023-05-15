<?php
session_start();
include '../../Config/dbConnection.php';

if (isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_new_password'])) {
    $doctor_id = $_SESSION['user_id']; 
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    if ($new_password !== $confirm_new_password) {
        echo "New password and confirmation do not match!";
        exit();
    }

    $sql = "SELECT password FROM user_tbl WHERE user_id = '$doctor_id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];

    if (md5($current_password) === $stored_password) {
        $new_password_hash = md5($new_password);
        $sql = "UPDATE user_tbl SET password = '$new_password_hash' WHERE user_id = '$doctor_id'";
        if (mysqli_query($con, $sql)) {
            if($_SESSION['user_role']== 'vog'){
                echo "<script type='text/javascript'>alert('Password changed successfully'); window.location.href='vog-profile.php';</script>";
            }else if($_SESSION['user_role'=='ped']){
                echo "<script type='text/javascript'>alert('Password changed successfully'); window.location.href='../../View/pediatritian/ped-profile.php';</script>";
            }

        } else {
            echo "Error changing password: " . mysqli_error($con);
        }
    } else {
        echo "Current password is incorrect!" . mysqli_error($con);
    }
} else {
    echo "Invalid request!";
}
?>
