<?php 
    session_start();
    include '../../Config/dbConnection.php';
    include "../../Assets/Includes/header_pages.php" ;

    // fetch childid from the url and store it in a variable
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style><?php include "../../Assets/css/style-common.css" ?></style>
</head>
<body>
    <div class="child-dashboard">
        <div class="card-pack">
       <button class="card" onclick="window.location.href = 'child-childCardView.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">description</span></div>
                <div class="card-content-right"><p>Child Management</p></div>
            </button><!--gap remover -->
            
       <button class="card" onclick="window.location.href = '';">
                <div class="card-content-left"><span class="material-symbols-outlined">vaccines</span></div>
                <div class="card-content-right"><p>Manage Calender</p></div>
            </button>

            <button class="card" onclick="window.location.href = ' ?>';">
                <div class="card-content-left"><span class="material-symbols-outlined">note_add</span></div>
                <div class="card-content-right"><p>Medical Notes</p></div>
            </button>
            <button class="card" onclick="window.location.href = 'phm-handlerequests.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">calculate</span></div>
                <div class="card-content-right"><p>Handling Requests</p></div>
            </button>

            
            </button>
        </div>
    </div>

</body>
</html>
