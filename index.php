
<?php 
include_once("Config/dbConnection.php");
include "Assets/Includes/header-kivi.php"; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "Assets/css/style-kivi.css" ?></style> 
</head>
<body>
    <div class="landingMain">
        <div class="landingLeft">
            <img class="landingPagePhoto" src="Assets/Images//common/landing-page-photo.jpg" alt="landing-page-photo">
        </div>
        <div class="landingRight">
            <div class="IndexRightContent">
                <h1>Welcome to <br> MOM CARE</h1>
            </div>
            <img class="logoLarge" src="Assets/Images/common/logoLarge.png" alt="Logo">
            <div>
                <a href="View/register.php"><button class="btnMain" >Register</button></a>
                <a href="View/login.php"><button class="btnMain" >Sign in</button></a>
            </div>
        </div>
    </div>
    <?php include "Assets/Includes/footer_index.php"; ?>
</body>
</html>