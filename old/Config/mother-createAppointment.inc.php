<?php 
    require_once 'dbConnection.php';

    if(isset($_POST['btn-reg']))
    {
        $app_topic = mysqli_real_escape_string($con, $_POST['app-topic']);
        $doc_id = mysqli_real_escape_string($con, $_POST['doc-id']);
        $doc_name = mysqli_real_escape_string($con, $_POST['doc-name']);
        $app_date = mysqli_real_escape_string($con, $_POST['app-date']);
        $app_time = mysqli_real_escape_string($con, $_POST['app-time']);
        $app_location = mysqli_real_escape_string($con, $_POST['app-place']);
        $app_note = mysqli_real_escape_string($con, $_POST['app-note']);

        if(empty($app_topic) || empty($doc_id) || empty($doc_name) || empty($app_date) || empty($app_time) || empty($app_location) || empty($app_note))
        {
            header("Location: ../mother-createAppointment.php?error=emptyfields&app-topic=".$app_topic."&doc-id=".$doc_id."&doc-name=".$doc_name."&app-date=".$app_date."&app-time=".$app_time."&app-place=".$app_location."&app-note=".$app_note);
            exit();
        }
        else
        {
                $sql = "SELECT * FROM doctor_details WHERE doc_id='$doc_id'";
                $result = mysqli_query($con, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if($resultCheck > 0)
                {
                    $sql = "INSERT into appointment_details (topic, doc_id, doc_name, app_date, app_time, app_place, notes) values ('$app_topic', '$doc_id', '$doc_name', '$app_date', '$app_time', '$app_location', '$app_note')";
                    $result = mysqli_query($con, $sql);

                    if($result)
                    {
                        header("Location: ../View/Mother/mother-listAppointments.php?success=appointmentCreated");
                        $echo = "Appointment Created";
                        exit();
                    }
                    else
                    {
                        header("Location: ../mother-createAppointment.php?error=sqlError");
                        exit();
                    }
                }
                else
                {
                    header("Location: ../mother-createAppointment.php?error=invalidDoctorID");
                    exit();
                }
            }

    }
?>