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
        }
    ?>
</head>
<body>
<div class="vog-profile-content-mainDiv">
        <div class="vog-profile-content">
            <div class="vog-profile-content-left">
                <div class="vog-profile-pic">
                    <img src="../../Assets/Images/mother/Profile pic_mom.png" alt="Profile pic_mom">
                </div>
                <div class="vog-profile-pq-details">
                    <h3>Professional Qualifications</h3>
                    <div class="vog-profile-pq-data">
                        <table>
                            <tr>
                                <td><label>Name</label></td>
                                <td><label for=""><?php  echo $doctor_pq?></label></td>
                            </tr>
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
            <a href="vog-profileUpdate.php"><button class="edit" style="background:#24D4B9;">Edit Profile</button></a>
            <a href="vog-passwordReset.php"><button class="change" style="background:#EA2727;">Change Password</button></a>
        </div>
    </div>
</body>
</html>

<?php //include "../../Assets/Includes/footer_pages.php"; ?>
<?php }else{
    header("Location: ../../mainLogin.php");
} ?>