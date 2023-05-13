<?php
include_once("Config/dbConnection.php");
include "Assets/Includes/header_index.php";
include "Assets/Includes/email.php";

if (isset($_POST['submit'])) {
    $token = bin2hex(random_bytes(50));
    $email = $_POST['email'];
    $sql = "SELECT * FROM user_tbl WHERE email='$email'";
    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Send password reset link to the email address
        $to = $email;
        $subject = "Password Reset Link";
        $message = "A password reset request has been made for your account. If you did not make this request, you can ignore this email. 
        Otherwise, you can reset your password using this link: http://localhost/momcare/mother-forgotPass.php";

        sendemail($email, 'Reset Password', $message);

        header("Location:Co-ForgotPassword.php?success=" . urlencode("Email Verification Sent!"));
        exit();
    } else {
        header("Location:Co-forgotPassword.php?error=" . urlencode("Email Address does not exist!"));
        exit();
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
                            <legend>&nbsp;Email Address:&nbsp;</legend>
                            <input type="email" name="email" id="email" placeholder="Enter your email">
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
