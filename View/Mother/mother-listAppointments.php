<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if(isset($_SESSION['email']) and isset($_SESSION['id'])){ 
        include '../../Assets/Includes/header_pages.php'; 
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
        <div class="app-content">
            <div class="add-btn">
                <a href="mother-createAppointment.php">
                    <button>
                        <div class="add-btn-items">
                            <h4>Create Appointment</h4>
                            <span class="material-icons-outlined">add_box</span>
                        </div>
                    </button>
                </a>
            </div>

            <!-- Appointment list -->
            
            <?php
                $sql = "SELECT doc_id, app_id FROM appointment_details";
                $result = $con->query($sql);

                // Checking if doc ids are available
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $doc_id = $row['doc_id'];
                        $app_id = $row['app_id'];

                        $sql = "SELECT * FROM doctor_details WHERE doc_id = '$doc_id'";
                        $result2 = $con->query($sql);

                        if($result2->num_rows > 0){
                            while($row = $result2->fetch_assoc()){
                                $doc_name = $row['doc_name'];
                                $doc_workplace = $row['doc_workplace'];
                                $output =  ' <div class="app-card">
                                    <div class="dr-pro-pic">
                                        <img src="../../Assets/Images/download.png" alt="">
                                    </div>
                                    <div class="details">';
                                    $output .= "<h5> $doc_name </h5><br>";
                                    $output .= "<p>MBBS $doc_workplace </p>";
                            $output .=      '</div>
                                    <div class="app-buttons">
                                        <a href="mother-viewAppointments.php?doc_id='.$row['doc_id'].'">
                                            <button class="app-view">View</button>
                                        </a>
                                        <a href="http://">
                                            <button class="app-delete">Delete</button>
                                        </a>
                                    </div>
                                </div> ';
                            echo "$output";
                            }
                        }
                    }
                }

                $output =  ' <div class="app-card">
                                    <div class="dr-pro-pic">
                                        <img src="../../Assets/Images/download.png" alt="">
                                    </div>
                                    <div class="details">';
                                    $output .= "<h5> $doc_name </h5><br>";
                                    $output .= "<p>MBBS $doc_workplace </p>";
                            $output .=      '</div>
                                    <div class="app-buttons">
                                        <a href="mother-viewAppointments.php">
                                            <button class="app-view">View</button>
                                        </a>
                                        <a href="http://">
                                            <button class="app-delete">Delete</button>
                                        </a>
                                    </div>
                                </div> ';
                            echo "$output";
            ?>
        </div>
    </div>
</body>
</html>
<?php } else {
    header("Location: ../../mainLogin.php");
    exit();}
?>