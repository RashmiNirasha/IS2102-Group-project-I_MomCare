<?php
session_start();
include('../../Assets/includes/C_header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../Assets/css/mother-stylesheet.css">

</head>
<body>
    <div class="content">
        <!-- topic and notifications -->
        <div class="heading">
        
            <h1>Welcome</h1>  <?php //echo $_SESSION['username']; ?>
            <a href="http://">
                <span class="material-icons">notifications</span>
            </a>
        </div>
        <!-- row 1 -->
        <div class="cards-list">
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">description</span>
                    <h3>Child Cards</h3>
                    </div>
                </div>
            </a>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">timeline</span>
                    <h3>Immunization</h3>
                    </div>
                </div>
            </a>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">medical_information</span>
                    <h3>Medical Notes</h3>
                    </div>
                </div>
            </a>
        </div>

        <!-- row 2 -->
        <div class="cards-list">
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">calendar_month</span>
                    <h3>BMI Calculator</h3>
                    </div>
                </div>
            </a>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">calculate</span>
                    <h3>Development Index</h3>
                    </div>
                </div>
            </a>
            <a href="mother-listAppointments.php">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">medical_information</span>
                    <h3>Vision and Auditory Test</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>

        <!-- Logout -->
        <div class="logout">
            <span></span>
            <a href="../../Config/logout.php">
                <button>
                    <div class="logout-btn-items">
                        <span class="material-icons-outlined">logout</span>
                        <h4>Logout</h4>
                    </div>
                </button>
            </a>   
        </div>
    </div>
</body>
</html>
<?php
    
?>