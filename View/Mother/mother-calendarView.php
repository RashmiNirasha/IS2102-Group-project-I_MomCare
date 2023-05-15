<?php 
    session_start();
    include '../../Config/dbConnection.php';
    if(isset($_SESSION['email'])){ 
        include '../../Assets/Includes/header_pages.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calendar</title>
    <style><?php include '../../Assets/Css/style-common.css'; ?></style> 
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script><?php include 'mother-calendar.js' ?></script>
</head>
<body>
<button class="goBackBtn" onclick="history.back()">Go back</button>
    <div class="mainCalendarDiv">
        <div class="calendarLeft">
            <div id='calendar'></div> 
        </div>
        <div class="calendarRight">
            <div class="calendarRightHeader">
                <h1>Appointments</h1>
            </div>
            <div class="calendarRightContent-2">
                <?php
                $clickedDate = isset($_POST['date']) ? $_POST['date'] : '';
                $mom_id = $_SESSION['id'];
                $query = "SELECT ma.*, md.mom_fname, md.mom_lname, md.mom_age, md.mom_propic
                        FROM mom_appointments ma
                        JOIN mother_details md ON ma.mom_id = md.mom_id
                        WHERE ma.mom_id = '$mom_id'";

                    if ($clickedDate !== '') {
                        $query .= " AND ma.start = '$clickedDate'";
                    }
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $mom_id = $row['mom_id'];
                        $app_id = $row['app_id'];
                        $title = $row['title'];
                        $start = $row['start'];
                        $location = $row['location'];
                        $mom_fname = $row['mom_fname'];
                        $mom_lname = $row['mom_lname'];
                        $mom_age = $row['mom_age'];
                        $mom_propic = $row['mom_propic'];
                        echo '
                            <div class="appointmentBar" onclick="appViewPopupFunction(\'' .
                            '<ul>' .
                                '<li>Name: ' . $mom_fname . ' ' . $mom_lname . '</li>' .
                                '<li>Mother ID: ' . $mom_id . '</li>' .
                                '<li>Age: ' . $mom_age . '</li>' .
                            '</ul>' .
                            '<ul>' .
                                '<li>Date: ' . $start . '</li>' .
                                '<li>Location: ' . $location . '</li>' .
                                '<li>Number: ' . $app_id . '</li>' .
                            '</ul>' .
                            '\')">
                            <div class="appImgDiv">
                                <img src="'.$mom_propic.'" alt="mpther-profile-pic">
                            </div>
                            <ul>
                                <li>Name: ' . $mom_fname . '' . $mom_lname . '</li>
                                <li>Mother ID: ' . $mom_id . '</li>
                                <li>Age: ' . $mom_age . '</li>
                            </ul>
                            <ul>
                                <li>Date: ' . $start . '</li>
                                <li>Location: ' . $location . '</li>
                                <li>Number: ' . $app_id . '</li>
                            </ul>
                            </div>';
                    }
                    ?>
            </div>
            <div class="mom-addAppointments">
                <input type="button" value="Add Appointment" onclick="addAppPopupFunction()">
            </div>
        </div>
    </div>
    <div id="appViewPopup" class="appViewPopup">
        <div class="appViewPopup-content">
            <span class="appViewPopup-close">&times;</span>
            <div class="app-profileImage"><img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic"></div>
            <div id="appointmentDetails"></div>
            <div class="app-viewMotherCard">
                <input type="button" value="Mother Card" onclick="">
                <input type="button" value="Reports" onclick="">
                <input type="button" value="Children" onclick="">
            </div>
        </div>
    </div>
    <div class="appAddPopup" id="appAddPopup">
        <div class="appAddPopup-content">
            <span class="appViewPopup-close" onclick="closePopup()">&times;</span>
            <div class="appAddPopup-header">
                <h1>Add Appointment</h1>
            </div>
            <div class="appAdd-form">
                <div>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td><label for="toc_type_selection">Who do you want to channel?</label></td>
                                <td>
                                    <input type="radio" name="doc_type" id="VOG" value="vog" onchange="updateDocName()">
                                    <label for="VOG">VOG</label>
                                    <input type="radio" name="doc_type" id="Pediatrician" value="ped" onchange="updateDocName()">
                                    <label for="Pediatrician">Pediatrician</label>
                                    <input type="radio" name="doc_type" id="PHM" value="phm" onchange="updateDocName()">
                                    <label for="PHM">PHM</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="appTitle">Title</label>
                                </td>
                                <td>
                                    <select name="title" id="title">
                                        <option value="" disabled selected>Select a Title</option>
                                        <option value="Checkup">Checkup</option>
                                        <option value="Vaccination">Vaccination</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="docName">Select a Doctor</label></td>
                                <td>
                                    <select name="docName" id="docName" name="id">
                                        <option value="" disabled selected>Select a Professional</option>
                                    </select>   
                                </td>
                            </tr>
                            <tr>
                                <td><label for="appDate">Date</label></td>
                                <td><input type="date" name="appDate" id="appDate"  min='<?php echo date('Y-m-d', strtotime('+3 days')); ?>'></td>
                            </tr>
                        </table>
                        <div class="docTypeSubmit">
                            <input type="button" value="Cancel" onclick="closePopup()">
                            <input type="submit" name="SubmitApp" value="Submit">
                        </div>
                    </form>
                    <?php
                        include '../../Config/dbConnection.php';
                        if (isset($_POST['SubmitApp'])) {
                            $doc_id = $_POST['docName'];
                            $date = $_POST['appDate'];
                            $user_role = $_POST['doc_type'];
                            $title = $_POST['title'];
                            $mom_id = $_SESSION['user_id'];

                            switch ($user_role) {
                                case 'vog':
                                case 'ped':
                                    $sql_loc = "SELECT doc_workplace FROM doctor_details WHERE doc_id = '$doc_id'";
                                    $result_loc = mysqli_query($con, $sql_loc);
                                    while ($row = mysqli_fetch_assoc($result_loc)) {
                                        $location = $row['doc_workplace'];
                                    } 

                                    $query = "INSERT INTO mom_appointments (mom_id, doc_id, start, location, title) VALUES ('$mom_id', '$doc_id', '$date', '$location', '$title')";
                                    $result = mysqli_query($con, $query);
                                    break;
                                    exit();
                                case 'phm':
                                    $query = "INSERT INTO mom_appointments (mom_id, phm_id, start, location) VALUES ('$mom_id', '$doc_id', '$date', 'Home')";
                                    $result = mysqli_query($con, $query);
                                    break;
                                    exit();
                            }
                        } 
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    }
?>
