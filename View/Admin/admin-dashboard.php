<?php
    include "../../Config/dbConnection.php";
    include "../../Config/admin-analytics.php";
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
            <h1>Admin Dashboard</h1>
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
            <div class="a-middle">
            <div class="a-cards">
                <div class="a-dropdown">
                <div class="a-card">
                <div class="a-icon-case">
                <i class="material-icons" alt="new user">person_add</i>
                </div>
                <div class="a-box">
                    <h3>Add New System User</h3>
                 </div>
                </div> 
                <div class="a-dropdown-content">
                <a href="..\..\View\Admin\admin-adddoctor.php">Add Doctors</a>
                <a href="..\..\View\Admin\admin-addphm.php">Add PHMs</a>
                </div>
                </div>

                <a href="admin-handlerequests.php"><div class="a-card">
                <div class="a-icon-case">
                <i class="material-icons" alt="Pregnant woman">pregnant_woman</i>
                </div>
                <div class="a-box">
                    <h3>Registration Requests</h3>
                 </div>
                </div> 
                </a>

                <div class="a-dropdown">
                <div class="a-card">
                <div class="a-icon-case">
                <i class="material-icons" alt="new user">manage_accounts</i>
                </div>
                <div class="a-box">
                    <h3>Manage User Accounts</h3>
                 </div>
                </div> 
                <div class="a-dropdown-content">
                <a href="..\..\View\Admin\admin-managemother.php">Mother Accounts</a>
                <a href="..\..\View\Admin\admin-managedoctor.php">Doctor Accounts</a>
                <a href="..\..\View\Admin\admin-managephm.php">PHM Accounts</a>
                </div>
                </div>

            </div>
            <div class="a-analytics">
                    <div class="a-topic">
                        <div class="a-icon-case">
                        <i class="material-icons" alt="querystats">query_stats</i>
                        </div>
                        <p>SITE PERFORMANCE</p>
                    </div>
                <div class="a-container-box">
                    <div class="a-count-box">
                        <div class="a-day">Today</div>
                        <div class="a-count">
                            <h1><?php echo $today_users; ?></h1>
                            <p>Total New Registrants</p>
                        </div>
                    </div>
                    <div class="a-count-box">
                        <div class="a-day">Yeterday</div>
                        <div class="a-count">
                            <h1><?php echo $yesterday_users; ?></h1>
                            <p>Total New Registrants</p>
                        </div>
                    </div>
                    <div class="a-count-box">
                        <div class="a-day">Past Month</div>
                        <div class="a-count">
                            <h1><?php echo $pastmonth_users; ?></h1>
                            <p>Total New Registrants</p>
                        </div>
                    </div>
                </div>   
            </div>
            </div>
        </div>
        <!-- <div class="log-out">
        <button onclick="window.location.href='../../Config/logout.php';" class="log-out-btn">Log out</button>
    </div>  
    </div> -->
</body>
</html>

<?php 
    }else{
        header("index.php");
}   
?>