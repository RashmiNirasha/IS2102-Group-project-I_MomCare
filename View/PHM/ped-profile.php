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
        $doc_id = $_SESSION['id'];

        $sql = "SELECT * FROM doctor_details WHERE doc_id = '$doc_id'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $doctor_id = $row['doc_id'];
            $doctor_name = $row['doc_name'];
            $doctor_dob = $row['doc_DOB'];
            $doctor_tele = $row['doc_tele'];
            $doctor_email = $row['doc_email'];
            $doctor_workplace = $row['doc_workplace'];
            $doctor_address = $row['doc_address'];
            $doctor_pq = $row['doc_pq'];
            $profilePicDestination = $row['doc_profile_pic'];
        }
    ?>
    <?php
        if (isset($_POST['vog-profile-update-btn'])) {
            $doc_id = $_POST['vog-id'];
            $doc_name = $_POST['vog-name'];
            $doc_dob = $_POST['vog-dob'];
            $doc_tele = $_POST['vog-mobile'];
            $doc_email = $_POST['vog-email'];
            $doc_workplace = $_POST['vog-workplace'];
            $doc_address = $_POST['vog-address'];

            if (isset($_FILES['vog-profilePic'])) {
                $profilePic = $_FILES['vog-profilePic'];
                $profilePicName = $profilePic['name'];
                $profilePicTmpName = $profilePic['tmp_name'];
                $profilePicError = $profilePic['error'];
        
                if ($profilePicError === 0) {
                    $profilePicExt = pathinfo($profilePicName, PATHINFO_EXTENSION);
                    $profilePicNewName = "profilePic_" . $doc_id . "." . $profilePicExt;
                    $profilePicDestination = "../../Assets/Images/vog/" . $profilePicNewName;
                    move_uploaded_file($profilePicTmpName, $profilePicDestination);
        
                    // Update the profile picture path in the database
                    $sql = "UPDATE doctor_details SET doc_profile_pic = '$profilePicDestination' WHERE doc_id = '$doc_id'";
                    mysqli_query($con, $sql);
                }
            }

            $sql = "UPDATE doctor_details SET doc_name = '$doc_name', doc_DOB = '$doc_dob', doc_tele = '$doc_tele', doc_email = '$doc_email', doc_workplace = '$doc_workplace', doc_address = '$doc_address' WHERE doc_id = '$doc_id'";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated Successfully!')</script>";
                echo "<script>window.location.href='vog-profile.php'</script>";
            } else {
                echo "<script>alert('Profile Update Failed!')</script>";
                echo "<script>window.location.href='vog-profile.php'</script>";
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
<div class="vog-profile-content-mainDiv">
        <div class="vog-profile-content">
            <div class="vog-profile-content-left">
                <div class="vog-profile-pic">
                    <img src="<?php echo $profilePicDestination ?>" alt="Profile_pic_vog">
                </div>
                <div class="vog-profile-pq-details">
                    <h3>Professional Qualifications</h3>
                    <div class="vog-profile-pq-data">
                        <table>
                            <?php   
                                $doc_id = $_SESSION['id'];
                                $sql2 = "SELECT * FROM doctor_pq WHERE doctor_id = '$doc_id'";
                                $result2 = mysqli_query($con, $sql2);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $doctor_pq = $row2['docs_pqs'];
                                    echo "<tr><td><label for=''>- {$doctor_pq}</label></td></tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="vog-profile-content-right">
                    <div class="vog-profile-details-header">
                        <div class="vog-profile-name">
                            <h4>Dr. <?php  echo $doctor_name;?></h4>
                        </div>
                        <div class="vog-profile-address">
                            <span class="material-symbols-outlined" data-icon="badge">badge</span>
                            <h5>Bachelor of Medicine and a Bachelor of Surgery</h5>
                        </div>
                    </div>
                    <div class="vog-profile-other-data">
                        <table class="vog-profile-details-tbl">
                            <tr>
                                <th colspan="2"><h3>My Details</h3></th>
                            </tr>
                            <tr>
                                <td><p>Doctor ID</p></td>
                                <td><label for="vog-id"><?php  echo $doctor_id?></label></td>
                            </tr>
                            <tr>
                                <td><p>Mobile Number</p></td>
                                <td><label for="vog-mobile"><?php  echo $doctor_tele?></label></td>
                            </tr>
                            <tr>
                                <td><p>Date of Birth</p></td>
                                <td><label for="vog-dob"><?php  echo $doctor_dob?></label></td>
                            </tr>
                            <tr>
                                <td><p>Email</p></td>
                                <td><label for="vog-email"><?php  echo $doctor_email?></label></td>
                            </tr>
                            <tr>
                                <td><p>Workplace</p></td>
                                <td><label for="vog-workplace"><?php  echo $doctor_workplace?></label></td>
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
                        <td><label for='vog-id' class="contactAdmin">Doctor ID</label></td>
                        <td><input type='text' name='vog-id' id='vog-id' value='<?php echo $doctor_id?>' tabindex="-5" readonly></td>
                    </tr>
                    <tr>
                        <td><label for='vog-name' class="contactAdmin">Name</label></td>
                        <td><input type='text' name='vog-name' id='vog-name' value='<?php echo $doctor_name?>' readonly></td>
                    </tr>
                    <tr>
                        <td><label for='vog-dob' class="contactAdmin">Date of Birth</label></td>
                        <td><input type='date' name='vog-dob' id='vog-dob' value='<?php echo $doctor_dob?>' readonly></td>
                    </tr>
                    <tr>
                        <td><label for='vog-mobile'>Mobile Number</label></td>
                        <td><input type='text' name='vog-mobile' id='vog-mobile' value='<?php echo $doctor_tele?>'></td>
                    </tr>
                    <tr>
                        <td><label for='vog-email' class="contactAdmin">Email</label></td>
                        <td><input type='email' name='vog-email' id='vog-email' value='<?php echo $doctor_email?>' readonly></td>
                    </tr>
                    <tr>
                        <td><label for='vog-workplace'>Workplace</label></td>
                        <td><input type='text' name='vog-workplace' id='vog-workplace' value='<?php echo $doctor_workplace?>'></td>
                    </tr>
                    <tr>
                        <td><label for='vog-address'>Address</label></td>
                        <td><input type='text' name='vog-address' id='vog-address' value='<?php echo $doctor_address?>'></td>
                    </tr>
                    <tr>
                        <td><label for="vog-profilePic">Profile Picture</label></td>
                        <td><input type="file" name="vog-profilePic" id="vog-profilePic"></td>
                    </tr>
                </table>
                <div class="VogProfilePopupBtn">
                    <label for="contactAdmin" class="contactAdminLable">Contact Admin</label>
                    <button type="cancel" name='cancel_update' id="cancel-update" onclick="vogUpdatePopup_close()">Cancel</button>
                    <button type='submit' name='vog-profile-update-btn' id='vog-profile-update-btn'>Update</button>
                </div>
            </form>
        </div>
    </div>
    <div class="vogPasswordChange" id="vogPasswordChange">
        <div class="vogPasswordChangeInnerDiv">
            <span class="vogPasswordChange-close" onclick="vogPasswordChange_close()">&times;</span>
            <h2>Change Password</h2>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><label for='vog-id'>Doctor ID</label></td>
                        <td><input type='text' name='vog-id' id='vog-id' value='<?php echo $doctor_id?>' readonly></td>
                    </tr>
                    <tr>
                        <td><label for='vog-current-password'>Current Password</label></td>
                        <td><input type='password' name='vog-current-password' id='vog-current-password'></td>
                    </tr>
                    <tr>
                        <td><label for='vog-new-password'>New Password</label></td>
                        <td><input type='password' name='vog-new-password' id='vog-new-password'></td>
                    </tr>
                    <tr>
                        <td><label for='vog-confirm-password'>Confirm Password</label></td>
                        <td><input type='password' name='vog-confirm-password' id='vog-confirm-password'></td>
                    </tr>
                </table>
                <div class="VogPasswordChangePopupBtn">
                    <button type="cancel" name='cancel_password_change' id="cancel-password-change" onclick="vogPasswordChange_close()">Cancel</button>
                    <button type='submit' name='vog-password-change-btn' id='vog-password-change-btn'>Change</button>
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