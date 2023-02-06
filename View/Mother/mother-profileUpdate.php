<?php 
include('mother-header.php');
include('../../Config/mother-viewProfile.inc.php');
include('../../Config/mother-updateProfile.inc.php');

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
        <div class="profile-data">
            <h3>Update Profile</h3>
            <form action="../../Config/mother-updateProfile.inc.php" method="post">
                <table class="update-form">
                    <tr>
                        <td colspan="2"><div class="mother-id"><p>Mother ID</p><label for="mother-id"><?php  echo $mother_id?></label></div></td>
                    </tr>
                    <tr>
                        <td><p>First Name</p></td>
                        <td><input type="text" value="<?php  echo $mother_fname?>"></td>
                    </tr>
                    <tr>
                        <td><p>Middle Name</p></td>
                        <td><input type="text" value="<?php  echo $mother_mname?>"></td>
                    </tr>
                    <tr>
                        <td><p>Last Name</p></td>
                        <td><input type="text" value="<?php  echo $mother_lname?>"></td>
                    </tr>
                    <tr>
                        <td><p>Address</p></td>
                        <td><input type="text" value="<?php  echo $mother_address?>"></td>
                    </tr>
                    <tr>
                        <td><p>Email</p></td>
                        <td><input type="text" value="<?php  echo $mother_email?>"></td>
                    </tr>
                    <tr>
                        <td><p>Mobile Number</p></td>
                        <td><input type="text" value="<?php  echo $mother_mobile?>"></td>
                    </tr>
                    <tr>
                        <td><p>Fixedline Number</p></td>
                        <td><input type="text" value="<?php  echo $mother_landline?>"></td>
                    </tr>
                    <tr>
                        <td><p>Profile Picture</p></td>
                        <td><input class="propic" type="file" name="mother-propic" id="" accept="image/*"></td>
                    </tr>
                    <tr>
                        <td><p>Guardian Name</p></td>
                        <td><input type="text" value="<?php  echo $guardian_name?>"></td>
                    </tr>
                    <tr>
                        <td><p>Guardian Mobile</p></td>
                        <td><input type="text" value="<?php  echo $guardian_mobile?>"></td>
                    </tr>
                </table>
            </form>
            <!-- buttons -->
            <div class="profileUpdate-buttons">
                <a href="mother-profileDetails.php">
                    <button class="back-button">Back</button>
                </a>
                <a href="http://">
                    <button type="submit" name="update-btn" class="update-button">Update Details</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>