<?php
session_start();
include '../../Config/dbConnection.php';

if (isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_new_password'])) {
    $doctor_id = $_SESSION['user_id']; // Replace this with the actual doctor_id
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
            if($_SESSION['role']== 'vog'){
                header("Location: vog-profile.php?passwordchanged=1");
            }else if($_SESSION['ped']){
                header("location: ../../View/pediatritian/ped-profile.php?passwordchanged=1");
            }

        } else {
            echo "Error changing password: " . mysqli_error($con);
        }
    } else {
        echo "Current password is incorrect!";
    }
} else {
    echo "Invalid request!";
}
?>
