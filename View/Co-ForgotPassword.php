<?php 
    include "../Assets/Includes/header.php"; 
    include "../Config/dbConnection.php";
    include "../Assets/Includes/email.php";
    
    //varify the entered email address exists in the databse
    function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

if (isset($_POST['submit'])) {
    $token = bin2hex(random_bytes(50));
    $email = test_input($_POST['email']);
    $sql = "SELECT * FROM user_tbl WHERE email='$email'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) === 1) {
        // the user name must be unique
        $row = mysqli_fetch_assoc($result);
        if ($row['email'] == $email) {
            //send password reset link to the email address
            $to = $email;
            $subject = "Password Reset Link";
            $message = "A password reset request has been made for your account. If you did not make this request, you can ignore this email. 
            Otherwise, you can reset your password using this link: http://localhost/IS2102-Group-project-I_MomCare/View/new_passw.php =" . $token . " to reset your password on our site";

            sendemail($email, 'Reset Password', $message);
            header("Location:forgotPass.php?success=" . urlencode("Email Verification Sent!"));
            exit();
        } else {
            header("Location:forgotPass.php?error=" . urlencode("Email Address does not exist!"));
            exit();
        }
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
    <style><?php include "../Assets/Css/style-common.css" ?></style>
</head>
<body>
<div class="landingMain">
        <div class="landingLeft">
            <img class="landingPagePhoto" src="../Assets/images/common/landing-page-photo.jpg" alt="landing-page-photo">
        </div>
        <div class="landingRight">
            <div class="login-container">
                <div class="ForgetPassLogoDiv">
                    <img src="../Assets/images/common/Project-Logo-landscape-size-middle.png" alt="login-logo">
                </div>
                <div class="ForgetPassFormDiv">
                        <form method="post" class="login-form" action=" ">
                    <h2>Reset Password</h2>
                        <fieldset>
                            <legend>&nbsp;Email Address:&nbsp;</legend>
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                        </fieldset>
                        <br>
                        <button type="submit" name="reset-password">Submit</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php //include "../Assets/Includes/footer_index.php"; ?>