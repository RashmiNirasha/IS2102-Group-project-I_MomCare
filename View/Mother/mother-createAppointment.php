<?php 
    include('mother-header.php');
    include('../../Config/mother-createAppointment.inc.php');
    session_start();
    if (isset($_SESSION['mother_email'])){

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
            <h1>Create Appoinments</h1>
            <a href="#">
                <span class="material-icons">notifications</span>
            </a>
        </div>
        <!-- Appointment create -->
        <div class="app-board">
            <form action="../../Config/mother-createAppointment.inc.php" method="POST">
                <div class="app-form">
                    <div class="app-topic">
                        <label for="app-topic">Topic: </label>
                        <input type="text" name="app-topic">
                    </div>
                    <table class="app-details">
                        <tr>
                            <td><label for="doc-id">Doc ID:</label></td> 
                            <td>
                                <div class="input-fields">
                                    <input type="text" name="doc-id" placeholder="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="doc-name">Doc Name:</label></td> 
                            <td>
                                <div class="input-fields">
                                    <input type="text" name="doc-name" placeholder="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="app-date">App. Date:</label></td> 
                            <td>
                                <div class="input-fields">
                                    <input type="date" name="app-date" placeholder="" id="app-date">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="app-time">Time:</label></td> 
                            <td>
                                <div class="input-fields">
                                    <input type="time" name="app-time" placeholder="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="app-place">Place:</label></td> 
                            <td>
                                <div class="input-fields">
                                    <input type="text" name="app-place" placeholder="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="app-note">Notes:</label></td> 
                            <td>
                                <div class="input-fields">
                                    <input type="textarea" name="app-note" placeholder="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="btn">
                                    <input type="submit" value="Create" name="btn-reg">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
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