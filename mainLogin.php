<?php 
    include "Assets/Includes/header_index.php"; 
?>
<?php include "Config/dbConnection.php";?>

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
                <div class="div-logo">
                    <img src="Assets/images/common/Project-Logo-landscape-size-middle.png" alt="login-logo">
                </div>
                <div class="div-form">
                    <form method="POST" class="login-form" action="Config/mainLoginModel.php ">
                        <?php if(isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p> 
                        <?php } ?>
                        <fieldset>
                            <legend>&nbsp;Email:&nbsp;</legend>
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend>&nbsp;Password:&nbsp;</legend>
                            <input type="password" name="password" id="password" placeholder="Enter your password">
                        </fieldset>
                        <div class="end">
                            <div class="logInOtherLinks">
                                <div class="forgot-psw">
                                    <a href="View/forgotPass.php">Forgot password?</a>
                                </div>
                                <div class="createAcc">
                                    <a href="View/register.php">Create an account</a>
                                </div>
                            </div>
                            <div class="sign-in-btn">
                                <button class="btn-login" type="submit">Sign in</button>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php include "Assets/Includes/footer_index.php"; ?>