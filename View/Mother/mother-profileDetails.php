<?php 
include('../../Config/mother-viewProfile.inc.php')

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
    <div class="profile-content">
        <div class="profile-pic">
            <img src="../../Assets/Images/mother/Profile_pic_mother" alt="">
            <div class="profile-child-data">
                <hr>
                <h3>Children Details</h3>
                <div class="child-details">
                        <label for="child-name">Child name</label>
                        <a href="#"><input type="button" value="View" name="view-btn"></a>
                </div>
            </div>
        </div>
        <div class="profile-details">
            <div class="profile-name">
                <h4><?php  echo $mother_fname?> &nbsp; <?php  echo $mother_mname?> &nbsp; <?php  echo $mother_lname?></h4>
            </div>
            <div class="profile-address">
                <span class="material-icons">fmd_good</span>
                <p><?php  echo $mother_address?></p>
            </div>
            <div class="profile-other-data">
                <table class="profile-details">
                    <tr>
                        <td><p>Mother ID</p></td>
                        <td><label for="mother-id"><?php  echo $mother_id?></label></td>
                    </tr>
                    <tr>
                        <td><p>Mobile Number</p></td>
                        <td><label for="mother-mobile"><?php  echo $mother_mobile?></label></td>
                    </tr>
                    <tr>
                        <td><p>Fixedline Number</p></td>
                        <td><label for="mother-landline"><?php  echo $mother_landline?></label></td>
                    </tr>
                    <tr>
                        <td><p>Date of Birth</p></td>
                        <td><label for="mother-dob"><?php  echo $mother_dob?></label></td>
                    </tr>
                    <tr>
                        <td><p>Email</p></td>
                        <td><label for="mother-email"><?php  echo $mother_email?></label></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height:50px"><hr></td>
                    </tr>
                    <tr>
                        <td><p>Guardian Name</p></td>
                        <td><label for="mother-guardian"><?php  echo $guardian_name?></label></td>
                    </tr>
                    <tr>
                        <td><p>Guardian Mobile</p></td>
                        <td><label for="mother-guardian-mobile"><?php  echo $guardian_mobile?></label></td>
                </table>
            </div>
        </div>
    </div>
    <div class="profile-buttons">
        <a href="mother-profileUpdate.php"><button class="edit" style="background:#24D4B9;">Edit Profile</button></a>
        <a href="mother-passwordReset.php"><button class="change" style="background:#EA2727;">Change Password</button></a>
        <a href="mother-card.php"><button class="view" style="background:#029EE4;">View Mother Card</button></a>
    </div>
</body>
</html>