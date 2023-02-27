<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if (isset($_SESSION['email'])){?>
<?php 
    include "../../Assets/Includes/header_pages.php";
    include "../../Config/mother-viewProfile.inc.php";
?><?php 


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
    <!-- <link rel="stylesheet" href="../../Assets/css/mother-stylesheet.css"> -->
    <style><?php include "../../Assets/css/style-common.css" ?></style>

</head>
<body>
    <?php 
    include('mother-header.php');
    ?>
    <div class="profile-content-mainDiv">
        <div class="profile-content">
            <div class="profile-content-innerDiv">
                <div class="profile-pic">
                    <img src="../../Assets/Images/mother/Profile pic_mom.png" alt="Profile pic_mom">
                    <div class="profile-child-data">
                        <hr>
                        <h3>Children Details</h3>
                        <div class="child-details-section">
                            <table>
                                <tr>
                                    <td><label for="child-name">Child name</label></td>
                                    <td><a href="#"><input type="button" value="View" name="view-btn"></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="profile-guardian-data">
                        <h3>Guardian Details</h3>
                        <div class="child-details-section">
                            <table>
                                <tr>
                                    <td><label>Name</label></td>
                                    <td><label for=""><?php  echo $guardian_name?></label></td>
                                </tr>
                                <tr>
                                    <td><label>Mobile</label></td>
                                    <td><label for=""><?php  echo $guardian_mobile?></label></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="profile-details">
                    <div class="profile-name">
                        <h4><?php  echo $mother_fname. " " .$mother_mname. " " .$mother_lname ;?></h4>
                    </div>
                    <div class="profile-address">
                        <span class="material-icons">fmd_good</span>
                        <p><?php  echo $mother_address?></p>
                    </div>
                    <div class="profile-other-data">
                        <table class="profile-details-tbl">
                            <tr>
                                <th colspan="2"><h3>My Details</h3></th>
                            </tr>
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
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="profile-buttons">
            <a href="mother-profileUpdate.php"><button class="edit" style="background:#24D4B9;">Edit Profile</button></a>
            <a href="mother-passwordReset.php"><button class="change" style="background:#EA2727;">Change Password</button></a>
            <a href="mother-card.php"><button class="view" style="background:#029EE4;">View Mother Card</button></a>
        </div>
    </div>
 
</body>
</html>

<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
} ?>