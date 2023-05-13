<?php
    session_start();
    include 'dbConnection.php';

    if (isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
        $mom_id = $_SESSION['mom_id']; // Replace this with the actual doctor_id
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if ($new_password !== $confirm_password) {
            echo "New password and confirmation do not match!";
            exit();
        }

        $sql = "SELECT password FROM user_tbl WHERE user_id = '$mom_id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        if (md5($current_password) === $stored_password) {
            $new_password_hash = md5($new_password);
            $sql = "UPDATE user_tbl SET password = '$new_password_hash' WHERE user_id = '$mom_id'";
            if (mysqli_query($con, $sql)) {
                header("location: ../View/Mother/mother-profileDetails.php?Password changed successfully!");

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