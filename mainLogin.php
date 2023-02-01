<?php include "Assets/Includes/header_index.php"; ?>
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
                    <img src="Assets/images/common/logo.png" alt="login-logo">
                </div>
                <div class="div-form">
                    <form method="post" class="login-form" action="vog-loginModel.php">
                        <?php if(isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p> 
                        <?php } ?>
                        <fieldset>
                            <legend>&nbsp;Email:&nbsp;</legend>
                            <input type="email" name="username" id="username" placeholder="Enter your user name">
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend>&nbsp;Password:&nbsp;</legend>
                            <input type="password" name="password" id="password" placeholder="Enter your password">
                        </fieldset>
                        <div class="end">
                            <div class="forgot-psw">
                                <a href="">Forgot password?</a>
                            </div>
                            <div class="sign-in-btn">
                                <button class="submit-btn" type="submit">Sign in</button>
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