<?php
    include "../../Assets/Includes/header_phm.php";
    // session_start();
    // if (isset($_SESSION['s_email'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="..\..\Assets\css\style-common.css" type="text/css">
    <!-- <link rel="icon" href="..\..\Assets\Images\images-Sachini\logo.png" type="image/icon type"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
    </style>
</head>
<body>
    <div class="a-container">
        <div class="a-content">
            <div class="a-container-n">
            <h1>Allocate Doctors</h1>
            <div class="a-container-m">
            <a href = "phm-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
            </div>
            </div>

        <div class="ad-card-container">
            <div class="ad-card">
                <i class="material-icons" alt="doctor icon">account_circle</i>
                <h4>Dr. Ama Dissanayake</h4>
                <div class="ad-location">
                    <i class="material-icons" alt="doctor icon">location_on</i>
                    <p>General Hospital, Colombo</p>
                </div>
                <div class="ad-btn">
                    <button>View</button>
                    <button>Allocate</button>
                </div>
            </div>
            <div class="ad-card">
            <i class="material-icons" alt="doctor icon">account_circle</i>
                <h4>Dr. Ama Dissanayake</h4>
                <div class="ad-location">
                    <i class="material-icons" alt="doctor icon">location_on</i>
                    <p>General Hospital, Colombo</p>
                </div>
                <div class="ad-btn">
                    <button>View</button>
                    <button>Allocate</button>
                </div>
            </div>
            <div class="ad-card">
            <i class="material-icons" alt="doctor icon">account_circle</i>
                <h4>Dr. Ama Dissanayake</h4>
                <div class="ad-location">
                    <i class="material-icons" alt="doctor icon">location_on</i>
                    <p>General Hospital, Colombo</p>
                </div>
                <div class="ad-btn">
                    <button>View</button>
                    <button>Allocate</button>
                </div>
            </div>
            <div class="ad-card">
            <i class="material-icons" alt="doctor icon">account_circle</i>
                <h4>Dr. Ama Dissanayake</h4>
                <div class="ad-location">
                    <i class="material-icons" alt="doctor icon">location_on</i>
                    <p>General Hospital, Colombo</p>
                </div>
                <div class="ad-btn">
                    <button>View</button>
                    <button>Allocate</button>
                </div>
            </div>
        </div>
    </div>
        <div class="a-content-2">
            <span></span>
            <a href = "..\..\Config\admin-logout.php"><button>
                <div class="a-btn-text"><h6>Log out</h6></div>
                <i class="material-icons" alt="logout">logout</i>
            </button></a>
        </div>
    </div>
</body>
</html>

<?php
// }else{
//     header("Location:admin-login.php");
// }

?>