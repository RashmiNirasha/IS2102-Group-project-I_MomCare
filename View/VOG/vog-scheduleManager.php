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
    <script><?php include 'vog-calendar.js' ?></script>

    <script>
        function updateMcardTable() {
            var popup = document.getElementById("calendarSettingsPopup");
            popup.style.display = "block";
        }
        function closePopup() {
            var popup = document.getElementById("calendarSettingsPopup");
            popup.style.display = "none";
        }
    </script>

    <?php
        if(isset($_POST['appLimit_submit'])) {
            if ($_POST['appLimit'] == '' || $_POST['appLimit'] < 5) {
                echo '<script>alert("Please enter a valid appointment limit!")</script>';
            } else {
            $appLimit = $_POST['appLimit'];
            $doc_id = $_SESSION['id'];
            $query = "UPDATE doctor_details SET app_limit = '$appLimit' WHERE doc_id = '$doc_id'";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo '<script>alert("Appointment limit updated successfully!")</script>';
            } else {
                echo '<script>alert("Error updating appointment limit!")</script>';
            }
        }
        }
    ?>
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
                    $doc_id = $_SESSION['id'];
                    $query = "SELECT ma.*, md.mom_fname, md.mom_lname, md.mom_age
                            FROM mom_appointments ma
                            JOIN mother_details md ON ma.mom_id = md.mom_id
                            WHERE ma.doc_id = '$doc_id'";

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
    <div class="appointmentSetting">
        <input type="button" value="Setting" onclick="updateMcardTable()">
    </div>

    <div class="calendarSettingsPopup" id="calendarSettingsPopup">
        <div class="updatePopup-content">
            <div class="updatePopup-header">
                <span class="close" onclick="closePopup()">&times;</span>
                <h2>Set Appointment Limit</h2>
            </div>
            <div class="updatePopup-body">
                <form action="#" method="POST">
                    <div class="updateFormTables">
                        <table>
                            <tr>
                                <td>
                                    <label for="set_app_limit">Set Appointment Limit: </label>
                                </td>
                                <td>
                                    <input type="number" name="set_app_limit" id="set_app_limit" placeholder="Set Appointment Limit" required>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="mom_id" value="<?php echo $mom_id ?>">
                    <div class="updateMcard_submit">
                        <button type="reset">Reset</button>
                        <button type="submit" name="appLimit_submit">Update</button>
                    </div>
                </form>
            </div>      
        </div>
    </div>

</body>
</html>
<?php 
    }
?>
