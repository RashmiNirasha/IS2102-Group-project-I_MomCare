<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if (isset($_SESSION['email'])){?>
<?php include "../../Assets/Includes/header_pages.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style><?php include "../../Assets/css/style-common.css" ?></style>
    <?php
        $phm_id = $_SESSION['phm_id'];

        $sql = "SELECT * FROM phm_details WHERE phm_id = '$phm_id'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $phm_id = $row['phm_id'];
            $phm_name = $row['phm_name'];
            $phm_dob = $row['phm_DOB'];
            $phm_tele = $row['phm_tele'];
            $phm_email = $row['phm_email'];
            $phm_workplace = $row['phm_workplace'];
            $phm_address = $row['phm_address'];
            // $doctor_pq = $row['doc_pq'];
            $profilePicDestination = $row['phm_profile_pic'];
        }
    ?>
    <?php
        if (isset($_POST['phm-profile-update-btn'])) {
            $phm_id = $_POST['phm-id'];
            $phm_name = $_POST['phm-name'];
            $phm_dob = $_POST['phm-dob'];
            $phm_tele = $_POST['phm-mobile'];
            $phm_email = $_POST['phm-email'];
            $phm_workplace = $_POST['phm-workplace'];
            $phm_address = $_POST['phm-address'];

            if (isset($_FILES['phm-profilePic'])) {
                $profilePic = $_FILES['phm-profilePic'];
                $profilePicName = $profilePic['name'];
                $profilePicTmpName = $profilePic['tmp_name'];
                $profilePicError = $profilePic['error'];
        
                if ($profilePicError === 0) {
                    $profilePicExt = pathinfo($profilePicName, PATHINFO_EXTENSION);
                    $profilePicNewName = "profilePic_" . $phm_id . "." . $profilePicExt;
                    $profilePicDestination = "../../Assets/Images/phm/" . $profilePicNewName;
                    move_uploaded_file($profilePicTmpName, $profilePicDestination);
        
                    // Update the profile picture path in the database
                    $sql = "UPDATE phm_details SET phm_profile_pic = '$profilePicDestination' WHERE phm_id = '$phm_id'";
                    mysqli_query($con, $sql);
                }
            }

            $sql = "UPDATE phm_details SET phm_name = '$phm_name', phm_DOB = '$phm_dob', phm_tele = '$phm_tele', phm_email = '$phm_email', phm_workplace = '$phm_workplace', phm_address = '$phm_address' WHERE phm_id = '$phm_id'";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated Successfully!')</script>";
                echo "<script>window.location.href='phm-profile.php'</script>";
            } else {
                echo "<script>alert('Profile Update Failed!')</script>";
                echo "<script>window.location.href='phm-profile.php'</script>";
            }
        }
    ?>
    <?php

    ?>
    <script>
        // Update profile
        function editVogProfile(){
            var confirmUpdate = confirm("Are you sure you want to edit your profile?");
            if (confirmUpdate == true){
                document.getElementById("UpdateVogProfile").style.display = "block";
            }
        }
        function vogUpdatePopup_close(){
            document.getElementById("UpdateVogProfile").style.display = "none";
        }
        // Password change
        function vogPasswordChange(){
            var confirmUpdate = confirm("Are you sure you want to change your password?");
            if (confirmUpdate == true){
                document.getElementById("vogPasswordChange").style.display = "block";
            }
        }
        function vogPasswordChange_close(){
            document.getElementById("vogPasswordChange").style.display = "none";
        }

    </script>
</head>

<body>
<button class="goBackBtn" onclick="history.back()">Go back</button>
<div class="vog-profile-content-mainDiv">
        <div class="vog-profile-content">
            <div class="vog-profile-content-left">
                <div class="vog-profile-pic">
                    <img src="<?php echo $profilePicDestination ?>" alt="Profile_pic_phm">
                </div>
                <!-- <div class="phm-profile-pq-details"> -->
                    <!-- <h3>Professional Qualifications</h3> -->
                    <!-- <div class="phm-profile-pq-data">
                        <table> -->
                            <?php   
                                // $doc_id = $_SESSION['id'];
                                // $sql2 = "SELECT * FROM doctor_pq WHERE doctor_id = '$doc_id'";
                                // $result2 = mysqli_query($con, $sql2);
                                // while ($row2 = mysqli_fetch_assoc($result2)) {
                                //     $doctor_pq = $row2['docs_pqs'];
                                //     echo "<tr><td><label for=''>- {$doctor_pq}</label></td></tr>";
                                // }
                            ?>
                        <!-- </table>
                    </div> -->
                <!-- </div> -->
            </div>
            <div class="vog-profile-content-right">
                    <div class="vog-profile-details-header">
                        <div class="vog-profile-name">
                            <h4>Ms. <?php  echo $phm_name;?></h4>
                        </div>
                        <!-- <div class="vog-profile-address">
                            <span class="material-symbols-outlined" data-icon="badge">badge</span>
                            <h5>Bachelor of Medicine and a Bachelor of Surgery</h5>
                        </div> -->
                    </div>
                    <div class="vog-profile-other-data">
                        <table class="vog-profile-details-tbl">
                            <tr>
                                <th colspan="2"><h3>My Details</h3></th>
                            </tr>
                            <tr>
                                <td><p>PHM ID</p></td>
                                <td><label for="phm-id"><?php  echo $phm_id?></label></td>
                            </tr>
                            <tr>
                                <td><p>Mobile Number</p></td>
                                <td><label for="phm-mobile"><?php  echo $phm_tele?></label></td>
                            </tr>
                            <tr>
                                <td><p>Date of Birth</p></td>
                                <td><label for="phm-dob"><?php  echo $phm_dob?></label></td>
                            </tr>
                            <tr>
                                <td><p>Email</p></td>
                                <td><label for="phm-email"><?php  echo $phm_email?></label></td>
                            </tr>
                            <tr>
                                <td><p>Workplace</p></td>
                                <td><label for="phm-workplace"><?php  echo $phm_workplace?></label></td>
                            </tr>
                        </table>
                    </div>
            </div>
        </div>
        <div class="vog-profile-buttons">
            <button class="edit" style="background:#24D4B9;" onclick="editVogProfile()">Edit Profile</button>
            <button class="change" style="background:#EA2727;" onclick="vogPasswordChange()">Change Password</button>
        </div>
    </div>
    <div class="UpdateVogProfile" id="UpdateVogProfile">
        <div class="updateProfileInnerDiv">
            <span class="vogUpdatePopup-close" onclick="vogUpdatePopup_close()">&times;</span>
            <h2>Update Profile</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for='phm-id' class="contactAdmin">Doctor ID</label></td>
                        <td><input type='text' name='phm-id' id='phm-id' value='<?php echo $phm_id?>' tabindex="-5" readonly></td>
                    </tr>
                    <tr>
                        <td><label for='phm-name' class="contactAdmin">Name</label></td>
                        <td><input type='text' name='phm-name' id='phm-name' value='<?php echo $phm_name?>' readonly></td>
                    </tr>
                    <tr>
                        <td><label for='phm-dob' class="contactAdmin">Date of Birth</label></td>
                        <td><input type='date' name='phm-dob' id='phm-dob' value='<?php echo $phm_dob?>' readonly></td>
                    </tr>
                    <tr>
                        <td><label for='phm-mobile'>Mobile Number</label></td>
                        <td><input type='text' name='phm-mobile' id='phm-mobile' value='<?php echo $phm_tele?>'></td>
                    </tr>
                    <tr>
                        <td><label for='phm-email' class="contactAdmin">Email</label></td>
                        <td><input type='email' name='phm-email' id='phm-email' value='<?php echo $phm_email?>' readonly></td>
                    </tr>
                    <tr>
                        <td><label for='phm-workplace'>Workplace</label></td>
                        <td><input type='text' name='phm-workplace' id='phm-workplace' value='<?php echo $phm_workplace?>'></td>
                    </tr>
                    <tr>
                        <td><label for='phm-address'>Address</label></td>
                        <td><input type='text' name='phm-address' id='phm-address' value='<?php echo $phm_address?>'></td>
                    </tr>
                    <tr>
                        <td><label for="phm-profilePic">Profile Picture</label></td>
                        <td><input type="file" name="phm-profilePic" id="phm-profilePic"></td>
                    </tr>
                </table>
                <div class="VogProfilePopupBtn">
                    <label for="contactAdmin" class="contactAdminLable">Contact Admin</label>
                    <button type="cancel" name='cancel_update' id="cancel-update" onclick="vogUpdatePopup_close()">Cancel</button>
                    <button type='submit' name='phm-profile-update-btn' id='phm-profile-update-btn'>Update</button>
                </div>
            </form>
        </div>
    </div>

    <div class="vogPasswordChange" id="vogPasswordChange">
        <div class="vogPasswordChangeInnerDiv">
            <span class="vogPasswordChange-close" onclick="vogPasswordChange_close()">&times;</span>
            <h2>Change Password</h2>
            <form action="change-password.php" method="POST">
               <table>
                        <tr>
                            <td><label for='phm-id'>PHM ID</label></td>
                            <td><input type='text' name='phm-id' id='phm-id' value='<?php echo $phm_id ?>' readonly></td>
                        </tr>
                        <tr>
                            <td>Current Password:</td>
                            <td>
                                <input type="password" name="current_password" id="current_password" required>
                                <!-- <input type="checkbox" id="toggle-current-password-visibility" onclick="togglePasswordVisibility('current_password')"> -->
                                <!-- <label for="toggle-current-password-visibility">Show</label> -->
                            </td>
                        </tr>
                        <tr>
                            <td>New Password:</td>
                            <td>
                                <input type="password" name="new_password" id="new_password" required>
                                <!-- <input type="checkbox" id="toggle-new-password-visibility" onclick="togglePasswordVisibility('new_password')"> -->
                                <!-- <label for="toggle-new-password-visibility">Show</label> -->
                            </td>
                        </tr>
                        <tr>
                            <td>Confirm New Password:</td>
                            <td>
                                <input type="password" name="confirm_new_password" id="confirm_new_password" required>
                                <!-- <input type="checkbox" id="toggle-confirm-password-visibility" onclick="togglePasswordVisibility('confirm_new_password')"> -->
                                <!-- <label for="toggle-confirm-password-visibility">Show</label> -->
                            </td>
                        </tr>
                    </table>
                <div class="VogPasswordChangePopupBtn">
                    <button type="cancel" name='cancel_password_change' id="cancel-password-change" onclick="vogPasswordChange_close()">Cancel</button>
                    <button type='submit' name='phm-password-change-btn' id='phm-password-change-btn'>Change</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<script>
    function togglePasswordVisibility(inputId) {
        const passwordInput = document.getElementById(inputId);
        const toggleCheckboxId = 'toggle-' + inputId + '-visibility';
        const toggleCheckbox = document.getElementById(toggleCheckboxId);

        if (toggleCheckbox.checked) {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
    </script>
<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
} ?>