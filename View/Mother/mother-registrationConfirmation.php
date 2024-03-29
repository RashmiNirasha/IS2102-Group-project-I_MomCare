<?php include "../../Assets/Includes/header_regConfirm.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
    <div class="landingMain">
        <div class="landingLeft">
            <img class="landingPagePhoto" src="../../Assets/Images/common/landing-page-photo.png" alt="landing-page-photo">
        </div>
        <div class="landingRight">
            <div class="RegConfMain">
                <div class="RegConf">
                    <h2>Registration Confirmation</h2>
                    <p>Your request sent successfully. Please wait for the <b>confirmation email</b>. This could take upto <b>48</b> hours.</p>
                </div>
                <a href="../../index.php"><button class="BackToHomeBtn">Back</button></a>
            </div>
        </div>
    </div>
</body>
</html>
         <?php //if(isset($_GET['success'])) { ?>
         <!-- <div class="alert alert-success"><?php //echo $_GET['success']; ?></div> -->
         <?php // } ?>
         <?php //if(isset($_GET['err'])) { ?>  
         <!-- <div class="alert alert-danger"><?php //echo $_GET['err']; ?></div> -->
         <?php // } ?>