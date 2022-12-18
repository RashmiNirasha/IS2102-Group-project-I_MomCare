<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style><?php include 'style.css' ?></style>
</head>
<body>
    <nav class="topnav"> <!-- top navigation bar -- start -->
        <img class="logo-MomCare" src="images\Project Logo - landscape-01 1 (1).png" alt="logo-MomCare">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
        </ul>
        <img class="profile_pic" src="images\doctor.png" alt="profile_pic">
    </nav> 
    <!-- top navigation bar -- end -->
    <div class="dashboard">
        <div class="card-pack"><!--gap remover
        --><button class="card">
                <div class="card-content-left"><img src="images/calendar-dates.png" alt="schedule-manager"></div>
                <div class="card-content-right"><p>Schedule Manager</p></div>
            </button><!--gap remover
        --><button class="card" onclick="window.location.href = 'mothers.php';">
                <div class="card-content-left"><img src="images/mothers-list.png" alt="mothers-list"></div>
                <div class="card-content-right"><p>Mothers</p></div>
            </button><!--gap remover
            --><button class="card">
                <div class="card-content-left"><img src="images/mothers-list.png" alt="children-list"></div>
                <div class="card-content-right"><p>Children</p></div>
            </button>
        </div>
    </div>
    <div class="log-out"> <!--logout button-->
        <button onclick="window.location.href='logout.php';" class="log-out-btn">Log out</button>
    </div>

</body>
</html>
<?php }
else{
    header("Location: index.php");
    exit();
}
?>