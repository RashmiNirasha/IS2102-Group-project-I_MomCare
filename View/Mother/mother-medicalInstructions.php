<?php
    session_start();
    if (isset($_SESSION['email'])){
    include "../../Config/dbConnection.php";
    include "../../Assets/Includes/header_pages.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Instructions</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../Assets/css/mother-stylesheet.css">
</head>
<body>
    <div class="content">
        <!-- topic and notifications -->
        <div class="heading">
            <h1>Medical Instructions</h1>
            <a href="http://">
                <span class="material-icons">notifications</span>
            </a>
        </div>

        <!-- medical instructions -->
        <div class="topics">
            <div class="topics-i" onclick="window.location.href = 'mother-phmInstructions.php'">
                <h4>PHM Instructions</h4>
            </div>
            <div class="topics-i" onclick="window.location.href = 'mother-vogInstructions.php'">
                <h4>VOG Instructions</h4>
            </div>
            <div class="topics-i" onclick="window.location.href = 'mother-pedInstructions.php'">
                <h4>Pediatrician Instructions</h4>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
    }
    else{
        header("Location: ../../index.php");
    }
?>