<?php 
include "../../Assets/Includes/header_pages.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style><?php include "../../Assets/css/style-common.css"; ?></style>
</head>
<body>
    <div class="dashboard">
        <div class="card-pack"><!--gap remover
        --><button class="card" onclick="window.location.href = 'childCardView.php';">
                <div class="card-content-left">
                <span class="material-symbols-outlined">
description
</span>
                </div>
                <div class="card-content-right"><p>Child Cards</p></div>
            </button><!--gap remover
        --><button class="card" onclick="window.location.href = 'immunizationView.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">vaccines</span></div>
                <div class="card-content-right"><p>Immunization</p></div>
            </button><!--gap remover
            --><button class="card" onclick="window.location.href = 'childCardView.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">note_add</span></div>
                <div class="card-content-right"><p>Medical Notes</p></div>
            </button><!--gap remover
            --><button class="card" onclick="window.location.href = 'BMIcal.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">calculate</span></div>
                <div class="card-content-right"><p>BMI Calculator</p></div>
            </button><!--gap remover
            --><button class="card" onclick="window.location.href = 'childCardView.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">oncology</span></div>
                <div class="card-content-right"><p>Vision and Auditory Test</p></div>
            </button><!--gap remover
            --><button class="card" onclick="window.location.href = 'childCardView.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">calendar_month</span></div>
                <div class="card-content-right"><p>Development Index</p></div>
            </button><!--gap remover-->
          
        </div>
    </div>
    <div class="log-out"> <!--logout button-->
        <button onclick="window.location.href='logout.php';" class="log-out-btn">Log out</button>
    </div>
</body>
</html>
<?php //include "../Assets/Includes/footer_index.php"; ?>