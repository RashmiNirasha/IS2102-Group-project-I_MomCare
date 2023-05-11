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
            <div class="calendarRightContent">
                <?php
                    $clickedDate = isset($_GET['date']) ? $_GET['date'] : '';
                    $mom_id = $_SESSION['id'];
                    $query = "SELECT * FROM appointments a INNER JOIN mom m ON a.mom_id = m.mom_id WHERE a.mom_id = '$mom_id'";

                    if ($clickedDate !== '') {
                        $query .= " AND ma.app_date = '$clickedDate'";
                    }
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $mom_id = $row['mom_id'];
                        $app_id = $row['app_id'];
                        $title = $row['topic'];
                        $start = $row['app_date'];
                        $location = $row['app_location'];
                        $mom_fname = $row['mom_fname'];
                        $mom_lname = $row['mom_lname'];
                        $mom_age = $row['mom_age'];
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
                                <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
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


</body>
</html>
<?php 
    }
?>
