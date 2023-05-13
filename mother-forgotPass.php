<?php
include_once("Config/dbConnection.php");
include "Assets/Includes/header_index.php";
include "Assets/Includes/email.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $new_password = md5($password);

    if ($password == $confirm_password) {
        $sql = "UPDATE user_tbl SET password='$new_password' WHERE email='$email'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "<script>alert('Password reset successfully.please log in using new password')</script>";
            
            header("Location: mainLogin.php?message=success");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    } else {
        echo "<script>alert('Passwords do not match. Please try again.')</script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "Assets/Css/style-common.css" ?></style>
</head>
<body>
    <div class="landingMain">
        <div class="landingLeft">
            <img class="landingPagePhoto" src="Assets/images/common/landing-page-photo.jpg" alt="landing-page-photo">
        </div>
        <div class="landingRight">
            <div class="login-container">
                <div class="ForgetPassLogoDiv">
                    <img src="Assets/images/common/Project-Logo-landscape-size-middle.png" alt="login-logo">
                </div>
                <div class="ForgetPassFormDiv">
                    <form method="post" class="login-form" action="">
                        <h2>Reset Password</h2>
                        <fieldset>
                        <legend>&nbsp;Email : &nbsp;</legend>
                        <input type="email" name="email" id="email" placeholder="Enter your email">
                            <legend>&nbsp;New Password:&nbsp;</legend>
                            <input type="password" name="password" id="password" placeholder="Enter your new password">
                            <legend>&nbsp;Confirm Password:&nbsp;</legend>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your new password">
                        </fieldset>
                        <br>
                        <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
