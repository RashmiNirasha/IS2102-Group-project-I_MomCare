<?php 
include('header.php');
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
    <link rel="stylesheet" href="mother-stylesheet.css">

</head>
<body>
    <div class="profile-content">
        <!-- pro pic -->
        <div class="profile-content">
            <div class="pro-pic">
                <img src="../Assets/Profile_pic_mother" alt="">
            </div>
            <div class="profile-name">
                <h3>Hansika Prashani Weerasinghe</h3>
            </div>
            <div class="profile-address">
                <span class="material-icons">fmd_good</span>
                <h4>Hometown, District.</h4>
            </div>
        </div>
        <div class="vline"></div>
        <!-- profile details -->
        <div class="profiles-data">
            <table class="profile-details">
                <tr>
                    <td><p>Mother ID</p></td>
                    <td><label for="mother-id">001</label></td>
                </tr>
                <tr>
                    <td><p>Mobile Number</p></td>
                    <td><label for="mother-mobile">076685457</label></td>
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
                        <li>
                            <label for="mother-child1">Child 1</label>
                            <label for="mother-child2">Child 2</label>
                            <label for="mother-child3">Child 3</label>
                        </li>
                    </td>
                </tr>
            </table>
            <!-- buttons -->
            <div class="profile-buttons">
                <a href="http://">
                    <button class="edit-button">Edit Profile</button>
                </a>
                <a href="http://">
                    <button class="password-change-button">Change Password</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>