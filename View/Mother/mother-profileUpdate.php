<?php 
include('mother-header.php');
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
    <div class="profile-page-content">
        <!-- pro pic -->
        <div class="profilepic-content">
            <div class="pro-pic">
                <img src="../../Assets/Images/Profile_pic_mother" alt="">
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
            <table class="update-form">
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
                    <td><label for="mother-landline">011685457</label></td>
                </tr>
                <tr>
                    <td><p>Date of Birth</p></td>
                    <td><label for="mother-dob">2022/11/11</label></td>
                </tr>
                <tr>
                    <td><p>Email</p></td>
                    <td><label for="mother-email">hansika@gmail.com</label></td>
                </tr>
                <tr>
                    <td><p>Guardian Name</p></td>
                    <td><label for="mother-guardian">Guardian me</label></td>
                </tr>
                <tr>
                    <td><p>Children Details</p></td>
                    <td>
                        <ul>
                            <li><label for="mother-child1">Child 1</label></li>
                            <li><label for="mother-child2">Child 2</label></li>
                            <li><label for="mother-child3">Child 3</label></li>
                        </ul>
                    </td>
                </tr>
            </table>
            <!-- buttons -->
            <div class="profileUpdate-buttons">
                <a href="http://">
                    <button class="back-button">Back</button>
                </a>
                <a href="http://">
                    <button class="update-button">Update Details</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>