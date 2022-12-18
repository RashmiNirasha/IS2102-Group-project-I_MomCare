<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style><?php include "style.css" ?></style>
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
    </nav> <!-- top navigation bar -- end -->
    <div class="main">
        <div class="left"></div>
        <div class="right">
            <div class="login-container">
                <div class="div-logo">
                    <img src="images/Project Logo - landscape-01 2.png" alt="login-logo">
                </div>
                <div class="home-para">
                    <p id="welcome">Welcome to</p>
                    <p id="momCare">MOM CARE</p>
                </div>
                <div class="home-buttons">
                    <a href="register.php"><button class="register">Register</button></a>
                    <a href="index.php"><button class="sign-in">Sign in</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>