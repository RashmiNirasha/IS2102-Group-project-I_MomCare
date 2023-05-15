
<?php 
include_once("Config/dbConnection.php");
include "Assets/Includes/header_index.php"; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index_page</title>
    <style><?php include "Assets/css/style-common.css" ?></style> 
</head>
<body>
    <div class="landingMain">
        <div class="landingLeft">
            <img class="landingPagePhoto" src="Assets/Images//common/landing-page-photo.png" alt="landing-page-photo">
        </div>
        <div class="landingRight">
            <div class="IndexRightContent">
                <h1>Welcome to <br> MOM CARE</h1>
            </div>
            <img class="logoLarge" src="Assets/Images/common/logoLarge.png" alt="Logo">
            <div>

            <!-- <?php //if(isset($_GET['success'])) { ?>
         
         <div class="alert alert-success"><?php //echo $_GET['success']; ?></div>
         
         <?php //} ?>
         
         <?php //if(isset($_GET['err'])) { ?>
         
         <div class="alert alert-danger"><?php //echo $_GET['err']; ?></div>
         
         <?php //} ?> -->
                <a href="View/Mother/mother-registrationView.php"><button class="btnMain" >Register</button></a>
                <a href="mainLogin.php"><button class="btnMain" >Sign in</button></a>
            </div>
        </div>
    </div>
    <!-- <?php //include "Assets/Includes/footer_index.php"; ?> -->
</body>
</html>