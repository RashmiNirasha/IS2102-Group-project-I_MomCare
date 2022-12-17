<?php
    session_start();
    if (isset($_SESSION['s_email'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="..\..\Assets\css\admin-panel.css" type="text/css">
    <!-- <link rel="icon" href="..\..\Assets\Images\images-Sachini\logo.png" type="image/icon type"> -->
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="nav">
               <div class="logo"><img src="..\..\Assets\Images\images-Sachini\logo.png" alt="website logo"></div>
               <span></span>
               <div class="nav-text">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="admin_panel.html">Dashboard</a>
               </div>
               <div class="image-user"><img src="..\..\Assets\Images\images-Sachini\people.png" alt="user profile picture"></div> 
            </div>
        </div>
        <div class="content">
            <div class="container-n">
            <h1>Admin Dashboard</h1>
            <img src="..\..\Assets\Images\images-Sachini\notification.png" alt="notification icon">
            </div>
            <div class="cards">
                <a href="View\Admin\manage_doctor.php"><div class="card">
                <div class="icon-case">
                    <img src="..\..\Assets\Images\images-Sachini\mother.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>Manage Mother Accounts</h3>
                 </div>
                </div> 
                </a>
               
                <a href="manage_doctor.php"><div class="card">
                <div class="icon-case">
                    <img src="..\..\Assets\Images\images-Sachini\doctor.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>Manage Doctor Accounts</h3>
                </div>
                </div>
                </a>

                <a href="#"><div class="card">
                <div class="icon-case">
                    <img src="..\..\Assets\Images\images-Sachini\phm.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>Manage PHM Accounts</h3>
                </div>
                </div> 
                </a>
            </div>
            <div class="cards">
                <a href="#"><div class="card">
                <div class="icon-case">
                     <img src="..\..\Assets\Images\images-Sachini\activation.png" alt="mother icon">
                </div>
                <div class="box">
                    <h3>User Account Activation</h3>
                </div>
                </div> 
                </a>
                
                <a href="#"><div class="card">
                <div class="icon-case">
                     <img src="..\..\Assets\Images\images-Sachini\analytics.png" alt="analytics icon">
                </div>
                <div class="box">
                    <h3>Performance Analytics</h3>
                </div>
                </div>
                </a>
 
                <a href="#"><div class="card">
                <div class="icon-case">
                     <img src="..\..\Assets\Images\images-Sachini\calendar.png" alt="calendar icon">
                </div>
                <div class="box">
                    <h3>Calendar Management</h3>
                </div>
                </div>
                </a>
            </div>
        </div>
        <div class="content-2">
            <span></span>
            <button><div class="btn-text"><a href = "..\..\Config\logout.php">Log out</a></div><div class="btn-icon"><img src="..\..\Assets\Images\images-Sachini\logout.png"></div></button>
        </div>
    </div>
</body>
</html>

<?php 
    }else{
        header("Location:login.php");
    }
?>