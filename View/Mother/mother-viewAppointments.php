<?php 
include('mother-header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../Assets/css/mother-stylesheet.css">

</head>
<body>
    <div class="content">
        <!-- topic and notifications -->
        <div class="heading">
            <h1>Appoinments</h1>
            <a href="#">
                <span class="material-icons">notifications</span>
            </a>
        </div>
        <div class="add-btn">
            <a href="/mother-createAppointment.php">
                <button>
                    <div class="add-btn-items">
                        <h4>Create Appointment</h4>
                        <span class="material-icons-outlined">add_box</span>
                    </div>
                </button>
            </a>
        </div>
        <!-- Appointment list -->
        <table class="app-list">
            <tr>
                <td>
                    <div class="pro-pics">
                        <img src="../../Assets/Images/Profile_pic_mother" alt="">
                    </div>
                </td>
                <td>
                    <div class="doc-details">
                        <h4>Name</h4><br>
                        <p>Place n address</p>
                    </div>
                </td>
                <td>
                    <a href="#">
                        <button>
                            <div class="app-btn-items">
                                <h4>View</h4>
                            </div>
                        </button>
                    </a>



                </td>
                <td>
                    <a href="#">
                        <button>
                            <div class="app-btn-items">
                                <h4>Delete</h4>
                            </div>
                        </button>
                    </a>
                </td>
            </tr>

        </table>

        <!-- Logout -->
        <div class="logout">
            <span></span>
            <a href="#">
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