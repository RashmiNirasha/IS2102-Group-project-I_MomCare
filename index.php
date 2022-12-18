<?php
   include_once("Config/dbConnection.php");
   include('Assets/Includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>
    <div class="content">
        <div class="wallpaper">
            <img src="Assets\Images\login-bg.jpg" alt="wallpaper">
        </div>
        <div class="details">
            <div class="heading">
                <h1>Welcome to <br> MOM CARE</h1>
            </div>
            <div class="logo-middle">
                <img src="Assets\Images\Project Logo - landscape.png" alt="">
            </div>
            <h5>New user? <a href="View\Mother\mother-signup.php">Register</a> here</h5>
        </div>
    </div>
</body>
</html>