<?php 
    include "../Assets/Includes/header_index.php"; 
    include "../Config/dbConnection.php";?>

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
            <img class="landingPagePhoto" src="Assets/images/common/landing-page-photo.jpg" alt="landing-page-photo">
        </div>
        <div class="landingRight">
            <div class="login-container">
                <div class="div-logo">
                    <img src="Assets/images/common/logo.png" alt="login-logo">
                </div>
                <div class="div-form">
                        <form method="post" class="login-form" action=" ">
                    <h3>Reset Password</h3>
                        <fieldset>
                            <legend>&nbsp;Email Address:&nbsp;</legend>
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                        </fieldset>
                        <br>
        
                            <div class="button">
                                <button class="btn-login" type="submit">Send Password Reset link</button>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php include "../Assets/Includes/footer_index.php"; ?>