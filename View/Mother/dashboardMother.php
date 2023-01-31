<?php include "../Assets/Includes/header_index.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style><?php include "../Assets/css/style-common.css" ?></style>
</head>
<body>
    <div class="dashboard">
        <div class="card-pack"><!--gap remover
        --><button class="card">
                <div class="card-content-left"><span class="material-symbols-outlined">acute</span></div>
                <div class="card-content-right"><p>Schedule Manager</p></div>
            </button><!--gap remover
        --><button class="card" onclick="window.location.href = 'mothers.php';">
                <div class="card-content-left"><span class="material-symbols-outlined">pregnant_woman</span></div>
                <div class="card-content-right"><p>Mothers</p></div>
            </button><!--gap remover
            --><button class="card">
                <div class="card-content-left"><span class="material-symbols-outlined">child_care</span></div>
                <div class="card-content-right"><p>Children</p></div>
            </button><!--gap remover
            --><button class="card">
                <div class="card-content-left"><span class="material-symbols-outlined">view_timeline</span></div>
                <div class="card-content-right"><p>Timeline</p></div>
            </button><!--gap remover
            --><button class="card">
                <div class="card-content-left"><span class="material-symbols-outlined">medical_information</span></div>
                <div class="card-content-right"><p>Medical Instructions</p></div>
            </button><!--gap remover
            --><button class="card">
                <div class="card-content-left"><span class="material-symbols-outlined">calendar_month</span></div>
                <div class="card-content-right"><p>Calendar</p></div>
            </button><!--gap remover
            --><button class="card">
                <div class="card-content-left"><span class="material-symbols-outlined">calculate</span></div>
                <div class="card-content-right"><p>Fetal Growth Calculator</p></div>
            </button><!--gap remover
            --><button class="card">
                <div class="card-content-left"><span class="material-symbols-outlined">event_available</span></div>
                <div class="card-content-right"><p>Appointments</p></div>
            </button>
        </div>
    </div>
    <div class="log-out"> <!--logout button-->
        <button onclick="window.location.href='logout.php';" class="log-out-btn">Log out</button>
    </div>
</body>
</html>
<?php include "../Assets/Includes/footer_index.php"; ?>