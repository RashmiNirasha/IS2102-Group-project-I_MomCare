<?php 
include('../../Config/mother-viewProfile.inc.php');
include('../../Config/mother-passwordReset.inc.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother Profile</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../Assets/css/mother-stylesheet.css">

</head>
<body>
    <?php 
    include('mother-header.php');
    ?>
    <div class="profile-page-content">
        <!-- pro pic -->
        <div class="profilepic-content">
            <div class="pro-pic1">
                <img src="../../Assets/Images/mother/Profile_pic_mother" alt="">
            </div>
            <div class="profile-name">
                <h4> <?php  echo $mother_fname?> &nbsp; <?php  echo $mother_mname?> &nbsp; <?php  echo $mother_lname?></h4>
            </div>
            <div class="profile-address">
                <span class="material-icons">fmd_good</span>
                <h4><?php  echo $mother_address?></h4>
            </div>
        </div>
        <div class="vline"></div>
        <!-- profile details -->
        <div class="pass-reset">
            <h3>Reset Password</h3>
            <form action="../../Config/mother-updateProfile.inc.php" method="post">
                <table class="update-form">
                    <tr>
                        <td><p>Current Password</p></td>
                        <td><input type="password" name="guardian-name" required></td>
                    </tr>
                    <tr>
                        <td><p>New Password</p></td>
                        <td><input type="password" name="guardian-mobile" required></td>
                    </tr>
                    <tr>
                        <td><p>Confirm New Password</p></td>
                        <td><input type="password" name="guardian-mobile" required></td>
                    </tr>
                </table>
            <!-- buttons -->
            <div class="profileUpdate-buttons">
                <a href="mother-profileDetails.php">
                    <button class="back-button">Back</button>
                </a>
                
                    <input type="submit" name="reset-btn" value="Reset">
            </div>
            </form>

        </div>
    </div>
</body>
</html>