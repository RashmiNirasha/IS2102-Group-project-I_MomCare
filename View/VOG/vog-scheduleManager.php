<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if(isset($_SESSION['email'])){ 
        //include '../../Assets/Includes/header_pages.php'; ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style><?php include '../../Assets/Css/style-common.css'; ?></style> 
    </head>
    <body>
        <div class="MainOuterDiv">
            <div class="MainInnerDiv">
                <div class="vogAppointmentsView-heading">
                    <h2>Up Comming Appointments</h2>
                    <button class="ViewVogCalendar">View my calendar</button>
                </div>
                <div class="vogAppointmentsView-body">
                    <div class="VogAppointmentBar">
                            <tr>
                                <tr>

                                </tr>
                            </tr>
                            <!-- // $query = "SELECT * FROM appointment_details WHERE doc_id = '$mother_id'";
                            // $result = mysqli_query($con, $query);
                            // $row = mysqli_fetch_assoc($result);
                            // $app_id = $row['app_id'];
                            // $app_date = $row['app_date'];
                            // $app_time = $row['app_time'];
                            // $app_place = $row['app_place'];
                            // $topic = $row['topic'];
                            // $notes = $row['notes'];
                            // $mom_id = $row['mom_id'];
                            // $doc_name = $row['doc_name'];
                            // $doc_id = $row['doc_id']; -->

                            
                                <tr>
                                    <td>
                                        <div class="Appointment-bar">
                                        <div class="Appointment-bar-left">
                                            <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                                            <div>
                                                <h3>Ms. '.$mother_first_name.' '.$mother_last_name.'</h3>
                                                <p class="second-line">'.$mother_phone.'</p>
                                                <label for="mother_id" name="mother_id" type="hidden" value="'.$mother_id.'"></label>
                                            </div>
                                        </div>
                                        <div class="Appointment-btns">
                                            <button name="viewMotherCard" onclick="window.location.href='../Mother/motherCardPage1.php'">Mother Card</button>
                                            <button name="viewTests" onclick="window.location.href='TestsVog.php'">Scan & Tests</button>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                    </div>
                </div>
            </div>    
        </div>
    </body>
    </html>
    <?php }
?>