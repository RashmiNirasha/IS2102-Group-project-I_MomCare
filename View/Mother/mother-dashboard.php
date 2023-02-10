<?php 
include "../../Config/dbConnection.php";
include('mother-header.php');
    session_start();
     if (isset($_SESSION['email'])){
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../Assets/css/mother-stylesheet.css">

</head>
<body>
    <div class="content">
        <!-- topic and notifications -->
        <div class="heading">
            <h1>Mother Dashboard</h1>
            <a href="http://">
                <span class="material-icons">notifications</span>
            </a>
        </div>
        <!-- row 1 -->
        <div class="cards-list">
            <a href="motherCardFormTitles.php">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">description</span>
                    <h3>Mother Card</h3>
                    </div>
                </div>
            </a>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">timeline</span>
                    <h3>Timeline</h3>
                    </div>
                </div>
            </a>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">medical_information</span>
                    <h3>Medical Instructions</h3>
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
                    <h3>Calendar</h3>
                    </div>
                </div>
            </a>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">calculate</span>
                    <h3>Fetal Growth Calculator</h3>
                    </div>
                </div>
            </a>
            <a href="mother-listAppointments.php">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">medical_information</span>
                    <h3>Appoinments</h3>
                    </div>
                </div>
            </a>
        </div>

        <!-- row 3 -->
        <div class="cards-list">
            <?php
                //$email = $_SESSION['email'];
                //$sql = "SELECT * FROM child_details WHERE mom_email = '$email'";
               // $result = mysqli_query($con, $sql);
                //$row = mysqli_fetch_array($result);

            //echo $row['child_name'];//"<a href='child-dashboard.php?child_id=".$row['child_id']."'>";?>
            <a href="http://">
                <div class="card">
                    <div class="icon-set">
                    <span class="material-icons-outlined">description</span>
                    <h3>Children</h3>
                    </div>
                </div>
            </a>
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
     }
     else{
        header("Location: ../../index.php");
    }
?>