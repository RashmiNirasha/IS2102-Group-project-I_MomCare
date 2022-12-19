<?php 
    include('mother-header.php');
    include('../../Config/mother-viewAppointments.inc.php')

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
            <h1>View Appoinments</h1>
            <a href="#">
                <span class="material-icons">notifications</span>
            </a>
        </div>
        <!-- Appointment view -->
        <div class="app-board">
            <form action="../../Config/">
                
                <div class="app-form">
                    <div class="app-topic">
                        <label for="app-topic">Topic: </label>
                        <p> <?php  echo $app_topic  ?> </p>
                    </div>
                    <table class="app-details-view">
                        <tr>
                            <td><label for="doc-id">Doc ID:</label></td> 
                            <td>
                            <p> <?php  echo $doc_id  ?> </p>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="doc-name">Doc Name:</label></td> 
                            <td>
                            <p> <?php  echo $doc_name  ?> </p>  
                            </td>
                        </tr>
                        <tr>
                            <td><label for="app-date">App. Date:</label></td> 
                            <td>
                            <p> <?php  echo $app_date  ?> </p>  
                            </td>
                        </tr>
                        <tr>
                            <td><label for="app-time">Time:</label></td> 
                            <td>
                            <p> <?php  echo $app_time  ?> </p>    
                            </td>
                        </tr>
                        <tr>
                            <td><label for="app-place">Place:</label></td> 
                            <td>
                            <p> <?php  echo $app_place  ?> </p>    
                            </td>
                        </tr>
                        <tr>
                            <td><label for="app-note">Notes:</label></td> 
                            <td>
                            <p> <?php  echo $app_notes  ?> </p>   
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="btn">
                                    <input type="submit" value="Edit" name="btn-reg">
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