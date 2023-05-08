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
    <style><?php include "../../Assets/css/style-common.css" ?></style>
    <?php
        $doc_id = $_SESSION['doc_id'];
        $doctor_id = '';
        $doctor_name = '';
        $doctor_dob = '';
        $doctor_tele = '';
        $doctor_email = '';
        $doctor_workplace = '';
        $doctor_address = '';
        $doctor_pic = '';
        $sql = "SELECT * FROM doctor_details WHERE doc_id = '$doc_id'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $doctor_id = $row['doc_id'];
            $doctor_name = $row['doc_name'];
            $doctor_dob = $row['doc_dob'];
            $doctor_tele = $row['doc_tele'];
            $doctor_email = $row['doc_email'];
            $doctor_workplace = $row['doc_workplace'];
            $doctor_address = $row['doc_address'];
            $doctor_pic = $row['doc_pic'];
        }
    ?>
</head>
<body>
<div class="profile-content-mainDiv">
        <div class="profile-content">
            <div class="profile-content-innerDiv">
                <div class="profile-pic">
                    <img src="../../Assets/Images/mother/Profile pic_mom.png" alt="Profile pic_mom">
                    <div class="profile-guardian-data">
                        <h3>Profetional Qualifications</h3>
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
                        <h4><?php  echo $doctor_name;?></h4>
                    </div>
                    <div class="profile-address">
                        <span class="material-icons">fmd_good</span>
                        <p><?php  echo $doctor_address = $row['doc_address'];?></p>
                    </div>
                    <div class="profile-other-data">
                        <table class="profile-details-tbl">
                            <tr>
                                <th colspan="2"><h3>My Details</h3></th>
                            </tr>
                            <tr>
                                <td><p>Doctor ID</p></td>
                                <td><label for="mother-id"><?php  echo $doctor_id?></label></td>
                            </tr>
                            <tr>
                                <td><p>Mobile Number</p></td>
                                <td><label for="mother-mobile"><?php  echo $doctor_tele?></label></td>
                            </tr>
                            <tr>
                                <td><p>Date of Birth</p></td>
                                <td><label for="mother-dob"><?php  echo $doctor_dob?></label></td>
                            </tr>
                            <tr>
                                <td><p>Email</p></td>
                                <td><label for="mother-email"><?php  echo $doctor_email?></label></td>
                            </tr>
                            <tr>
                                <td><p>Workplace</p></td>
                                <td><label for="mother-workplace"><?php  echo $doctor_workplace?></label></td>
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