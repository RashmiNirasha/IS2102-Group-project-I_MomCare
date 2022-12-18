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
    <title>Document</title>
    <style><?php include "style.css" ?></style>
</head>
<body>
     <!-- top navigation bar -- start -->
    <nav class="topnav">
        <img class="logo-MomCare" src="images\Project Logo - landscape-01 1 (1).png" alt="logo-MomCare">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
        </ul>
        <img class="profile_pic" src="images\doctor.png" alt="profile_pic">
    </nav> 
    <!-- top navigation bar -- end -->
    <div class="main-mother">
        <div class="mom-filter">
            <input class="mom-search" type="search" name="mom-search" id="mom-search" placeholder="Search">
            <div class="mom-filter-right">
                <label for="searched-by">Searched by</label>
                <select class="dropdown-menu" name="dropdown-menu" id="dropdown-menu">
                    <option value="name">Name</option>
                    <option value="id">ID</option>
                </select>
            </div>
        </div>
        <div class="mom-bar">
            <div class="mom-bar-left">
                <img src="images/Profile_pic_mother 1.png" alt="mpther-profile-pic">
                <div>
                    <h3>Ms. Indrani Perera</h3>
                    <p class="second-line">0712345678</p>
                </div>
            </div>
            <div class="mom-btns">
                <button>Mother Card</button>
                <button onclick="window.location.href='tests.php';">Scan & Tests</button>
            </div>
        </div>
    </div>
    <!--logout button-->
    <div class="log-out"> 
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