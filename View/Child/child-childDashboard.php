<?php 
    session_start();
    include '../../Config/dbConnection.php';
    include "../../Assets/Includes/header_pages.php" ;

    // fetch childid from the url and store it in a variable
    $child_id = $_GET['child_id'];
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
        <div class="card-pack"><!--gap remover
        --><button class="card" onclick="window.location.href = 'child-childCardView.php?child_id=<?php echo $_GET['child_id']; ?>';">
                <div class="card-content-left"><span class="material-symbols-outlined">description</span></div>
                <div class="card-content-right"><p>Child Cards</p></div>
            </button><!--gap remover -->
            
       <button class="card" onclick="window.location.href = 'child-immunizationView.php?child_id=<?php echo $_GET['child_id']; ?>';">
                <div class="card-content-left"><span class="material-symbols-outlined">vaccines</span></div>
                <div class="card-content-right"><p>Immunization Card</p></div>
            </button>

            <button class="card" onclick="window.location.href = 'child-viewMedicalNotes.php?child_id=<?php echo $_GET['child_id']; ?>';">
                <div class="card-content-left"><span class="material-symbols-outlined">note_add</span></div>
                <div class="card-content-right"><p>Medical Notes</p></div>
            </button>
            <button class="card" onclick="window.location.href = 'normalBMI.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">calculate</span></div>
                <div class="card-content-right"><p>BMI Calculator</p></div>
            </button><!--gap remover
            --><button class="card" onclick="window.location.href = '#';">
                <div class="card-content-left"><span class="material-symbols-outlined">oncology</span></div>
                <div class="card-content-right"><p>Vision and Auditory Test</p></div>
            </button><!--gap remover
            --><button class="card" onclick="window.location.href = '#';">
                <div class="card-content-left"><span class="material-symbols-outlined">calendar_month</span></div>
                <div class="card-content-right"><p>Development Index</p></div>
            </button>
        </div>
    </div>

</body>
</html>
