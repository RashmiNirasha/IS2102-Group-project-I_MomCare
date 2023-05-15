<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if (isset($_SESSION['email'])){?>
<?php 
    include "../../Assets/Includes/header_pages.php";
    include "../../Config/mother-viewProfile.inc.php";
    include "../../Config/mother-updateProfile.inc.php";
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
    <style><?php 
        include "../../Assets/css/style-common.css";
     ?>
    </style>

    <script>
        // Update profile
        function editMotherProfile(){
            var confirmUpdate = confirm("Are you sure you want to edit your profile?");
            if (confirmUpdate == true){
                document.getElementById("UpdateMotherProfile").style.display = "block";
            }
        }
        function momUpdatePopup_close(){
            document.getElementById("UpdateMotherProfile").style.display = "none";
        }
        // Password change
        function momPasswordChange(){
            var confirmUpdate = confirm("Are you sure you want to change your password?");
            if (confirmUpdate == true){
                document.getElementById("momPasswordChange").style.display = "block";
            }
        }
        function momPasswordChange_close(){
            document.getElementById("momPasswordChange").style.display = "none";
        }
        

    </script>
</head>
<body>
    <?php 
    //include('mother-header.php');
    ?>
    <div class="profile-content-mainDiv">
    <button class="goBackBtn" onclick="history.back()">Go back</button>
        <div class="profile-content">
            <div class="profile-content-innerDiv">
                <div class="profile-pic">
                    <img src="<?php  echo $mother_propic?>" alt="Profile pic_mom">
                    <div class="profile-child-data">
                        <hr>
                        <h3>Children Details</h3>
                        <div class="child-details-section">
                            <table>
                                    <?php
                                        $sql = "SELECT child_name,child_id FROM child_details WHERE mom_id = '$mom_id'";
                                        $result = mysqli_query($con, $sql);
                                        if ($result instanceof mysqli_result && mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $child_id = $row['child_id'];
                                                $child_name = $row['child_name'];
                                                echo '<tr>
                                                        <td><label for="child-name">'.$child_name.'</label></td>
                                                        <td><a href="../../View/child/child-childDashboard.php?child_id='.$child_id.'"><input type="button" value="View" name="view-btn"></a></td>
                                                    </tr>';
                                            }
                                        }

                                    ?>
                                    <!-- <td><label for="child-name">Child name</label></td>
                                    <td><a href="#"><input type="button" value="View" name="view-btn"></a></td> -->
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
            <button class="edit" style="background:#24D4B9;" onclick="editMotherProfile()">Edit Profile</button>
            <a><button class="change" style="background:#EA2727;" onclick="momPasswordChange()">Change Password</button></a>
            <a href="mother-motherCardUpdate.php?mom_id=<?php echo $_SESSION['mom_id']; ?>"><button class="view" style="background:#029EE4;">View Mother Card</button></a>
        </div>
    </div>

    <!-- Mother Profile Update -->

    <div class="UpdateMotherProfile" id="UpdateMotherProfile" style="display:none;">
        <div class="updateProfileInnerDiv">
            <span class="momUpdatePopup-close" onclick="momUpdatePopup_close()">&times;</span>
            <h2>Update Profile</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for='mom_id' class="contactAdmin">Mother ID</label></td>
                        <td><input type='text' name='mom_id' id='mom_id' value="<?php  echo $mother_id?>" readonly></td>
                    </tr>
                    <tr>
                        <td><label for='mom_fullname' class="contactAdmin">Name</label></td>
                        <td><input type='text' name='mom_fullname' id='mom_fullname' value="<?php  echo $mother_fname. " " .$mother_mname. " " .$mother_lname ;?>" readonly></td>
                    </tr>
                    <tr>
                        <td><label for='mom_dob' class="contactAdmin">Date of Birth</label></td>
                        <td><input type='date' name='mom_dob' id='mom_dob' value="<?php  echo $mother_dob?>" readonly></td>
                    </tr>
                    <tr>
                        <td><label for='mom_email' class="contactAdmin">Email</label></td>
                        <td><input type='email' name='mom_email' id='mom_email' value="<?php  echo $mother_email?>" readonly></td>
                    </tr>
                    <tr>
                        <td><label for='mom_mobile'>Mobile</label></td>
                        <td><input type='text' name='mom_mobile' id='mom_mobile' value="<?php  echo $mother_mobile?>" required></td>
                    </tr>
                    <tr>
                        <td><label for='mom_landline'>FixedLine</label></td>
                        <td><input type='text' name='mom_landline' id='mom_landline' value="<?php  echo $mother_landline?>" required></td>
                    </tr>
                    <tr>
                        <td><label for='mom_address'>Address</label></td>
                        <td><input type='text' name='mom_address' id='mom_address' value="<?php  echo $mother_address?>" required></td>
                    </tr>
                    <tr>
                        <td><label for='mom_propic'>Profile Image</label></td>
                        <td><input type='file' name='mom_propic' id='mom_propic' value="<?php  echo $mother_propic?>"></td>
                    </tr>
                    <tr>
                        <td><label for='guardian_name'>Guardian Name</label></td>
                        <td><input type='text' name='guardian_name' id='guardian_name' value="<?php  echo $guardian_name?>" required></td>
                    </tr>
                    <tr>
                        <td><label for='guardian_mobile'>Guardian Mobile</label></td>
                        <td><input type='text' name='guardian_mobile' id='guardian_mobile' value="<?php  echo $guardian_mobile?>" required></td>
                    </tr>
        
                </table>
                <div class="MotherProfilePopupBtn">
                    <label for="contactAdmin" class="contactAdminLable">Contact Admin</label>
                    <button type="cancel" name='cancel_update' id="cancel-update" onclick="momUpdatePopup_close()">Cancel</button>
                    <button type='submit' name='mother-profile-update-btn' id='mother-profile-update-btn'>Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Mother Password Reset -->

    <div class="momPasswordChange" id="momPasswordChange" style="display:none;">
        <div class="momPasswordChangeInnerDiv">
            <span class="momPasswordChange-close" onclick="momPasswordChange_close()">&times;</span>
            <h2>Change Password</h2>
            <form action="../../Config/mother-passwordReset.inc.php" method="POST">
               <table>
                    <tr>
                        <td><label for='mom_id' class="contactAdmin">Mother ID</label></td>
                        <td><input type='text' name='mom_id' id='mom_id' value="<?php  echo $mother_id?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Current Password</td>
                        <td><input type="password" name="current_password" id="current_password" required></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td><input type="password" name="new_password" id="new_password" required></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="confirm_password" id="confirm_password" required></td>
                    </tr>
                </table>
                <div class="momPasswordChangePopupBtn">
                    <button type="cancel" name='cancel_password_change' id="cancel-password-change" onclick="momPasswordChange_close()">Cancel</button>
                    <button type='submit' name='mom-password-change-btn' id='mom-password-change-btn'>Change</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
} ?>