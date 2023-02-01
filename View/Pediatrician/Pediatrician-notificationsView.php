<!DOCTYPE html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../../Assets/css/pediatrician-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>

<?php 
include "../../Assets/Includes/header_pages.php";
?>
<div class="main-notif">
    <h1>Notifications</h1>
    
        <div class="notif-bar">
            <div class="notif-left">
                <img src="../../Assets/Images/bell.png" alt="">
                <div class="notif-card">
                    <h3>Topic: Appointment alert</h3>
                </div>
            </div>
            <div class="notif-btns">
                <button>Date : 2022/12/10</button>
                <button>Time : 11.45 a.m.</button>
            </div>
        </div>
    </div>

    <?php include_once '../../Assets/Includes/ped-footer.php'; ?>
</body>

</html>


