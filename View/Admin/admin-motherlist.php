<?php
    include "../../Assets/Includes/header_admin.php";
    // include "..\..\Config\admin-managedoctorprocess.php";
    // session_start();
    // if (isset($_SESSION['s_email'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother List</title>
    <link rel="stylesheet" href="..\..\Assets\css\style-common.css" type="text/css">
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
                <h1>New Registrations</h1>
                <div class="a-container-m">
                <div class="a-dropdown"><div class="a-manage-icon"><i class="material-icons" alt="manage accounts">manage_accounts</i>
            </div>
            <div class="au-dropdown-content">
                    <a href="..\..\View\Admin\admin-managemother.php">Manage Mother Accounts</a>
                    <a href="..\..\View\Admin\admin-managedoctor.php">Manage Doctor Accounts</a>
                    <a href="..\..\View\Admin\admin-managephm.php">Manage PHM Accounts</a>
                    </div>
            </div>
                <a href = "admin-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
                </div></div>
            <div class="ml-bar-container"></div>

            <div class="ml-bar">
                <div class="ml-img-manage">
                    <i class="material-icons" alt="woman">person_3</i>
                    <div class="ml-text-manage">
                        <h3>Sandali Amasha Dissanayake</h3>
                        <p>2017-07-23 13:10:11</p>
                    </div>
                </div>
                <div class="ml-btn-container">
                    <div class="ml-btn-manage">
                        <a href = "admin-approvemother.php"><input type="button" value="View Details"></a>
                    </div>
                </div>
            </div>

            <div class="ml-bar">
                <div class="ml-img-manage">
                    <i class="material-icons" alt="woman">person_3</i>
                    <div class="ml-text-manage">
                        <h3>Sandali Amasha Dissanayake</h3>
                        <p>2017-07-23 13:10:11</p>
                    </div>
                </div>
                <div class="ml-btn-container">
                    <div class="ml-btn-manage">
                        <a href = "admin-approvemother.php"><input type="button" value="View Details"></a>
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