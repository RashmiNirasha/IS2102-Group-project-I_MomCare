<?php
//connecting to the database
// require_once '..\..\Config\dbConnection.php';
 session_start();
 if (isset($_SESSION['email'])){
     include "../../Assets/Includes/header_pages.php";

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Doctor</title>
    <link rel="stylesheet" href="..\..\Assets\css\style-common.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
    </style> -->
</head>
<body>
<div class="a-container">
        <div class="a-content">
            <div class="a-container-n">
                <h1>Notifications</h1>
                <div class="a-container-m">
                <!-- <div class="a-dropdown"><div class="a-manage-icon"><i class="material-icons" alt="manage accounts">manage_accounts</i>
            </div>
            <div class="au-dropdown-content">
                    <a href="..\..\View\Admin\admin-managemother.php">Manage Mother Accounts</a>
                    <a href="..\..\View\Admin\admin-managedoctor.php">Manage Doctor Accounts</a>
                    <a href="..\..\View\Admin\admin-managephm.php">Manage PHM Accounts</a>
                    </div>
            </div> -->
                <a href = "admin-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
                </div></div>
            <div class="ml-bar-container">
                <div class="n-bar">
                    <div class="n-body1">
                        <i class="material-icons" alt="notification icon">notifications</i>
                        <div class="n-topic"><p>Topic: New User Registration alert</p></div>
                    </div>
                    <div class="n-body2">
                        <div class="n-date"><p>Date: 28/10/2022</p></div>
                        <div class="n-time"><p>Time: 11:45 am</p></div>
                    </div>
                </div>
                <div class="n-bar">
                    <div class="n-body1">
                        <i class="material-icons" alt="notification icon">notifications</i>
                        <div class="n-topic"><p>Topic: New User Registration alert</p></div>
                    </div>
                    <div class="n-body2">
                        <div class="n-date"><p>Date: 28/10/2022</p></div>
                        <div class="n-time"><p>Time: 11:45 am</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
}else{
    header("Location:admin-login.php");
}

?>