<?php
session_start();
include '../../Config/dbConnection.php';
if (isset($_SESSION['email'])) {
    include '../../Assets/Includes/header_pages.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Calendar</title>
        <style>
            <?php include '../../Assets/Css/style-common.css'; ?>
        </style>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js'></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            <?php include 'phm-calendar.js' ?>
        </script>
    </head>

    <body>
        <button class="goBackBtn" onclick="history.back()">Go back</button>
        <div class="au-msg">
            <?php
            if (isset($_GET['status']) && $_GET['status'] == 'errorIDTaken') {
                echo "<p class='au-imp-message'>Doctor ID is already taken.</p>";
            } else
                            if (isset($_GET['status']) && $_GET['status'] == 'erroremptyField') {
                echo "<p class='au-imp-message'>All the fields are required.</p>";
            } elseif (isset($_GET['status']) && $_GET['status'] == 'success') {
                echo "<p class='au-nor-message'>Record Added Successfully.</p>";
                // echo "<script>setTimeout(\"location.href = 'admin-managedoctor.php';\",1500);</script>";
            }
            ?>
        </div>

        <div class="mainCalendarDiv">
            <!-- <form action = "phm-createappointment.php" method="post"><button type="submit" name = "insert">create appointment</button></form> -->
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
                    $phm_id = $_SESSION['phm_id'];

                    $query = "SELECT pa.*, md.mom_fname, md.mom_lname, md.mom_age
                            FROM phm_appointments pa
                            JOIN mother_details md ON pa.mom_id = md.mom_id
                            WHERE pa.phm_id = '$phm_id'";

                    if ($clickedDate !== '') {
                        $query .= " AND pa.app_date = '$clickedDate'";
                    }
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $mom_id = $row['mom_id'];
                        $p_app_id = $row['p_app_id'];
                        $app_title = $row['app_title'];
                        $app_date = $row['app_date'];
                        $app_location = $row['app_location'];
                        $mom_fname = $row['mom_fname'];
                        $mom_lname = $row['mom_lname'];
                        $mom_age = $row['mom_age'];
                        echo '
                            <div class="appointmentBar" onclick="appViewPopupFunction(\'' .
                            '<ul>' .
                            '<li>Name: ' . $mom_fname . " " . ' ' . $mom_lname . '</li>' .
                            '<li>Mother ID: ' . $mom_id . '</li>' .
                            '<li>Age: ' . $mom_age . '</li>' .
                            '</ul>' .
                            '<ul>' .
                            '<li>Date: ' . $app_date . '</li>' .
                            '<li>Location: ' . $app_location . '</li>' .
                            '<li>Number: ' . $p_app_id . '</li>' .
                            '<li>Title: ' . $app_title . '</li>' .
                            '</ul>' .
                            '\')">
                            <div class="appImgDiv">
                                <img src="../../Assets/images/mother/Profile_pic_mother.png" alt="mpther-profile-pic">
                            </div>
                            <ul>
                                <li>Name: ' . $mom_fname . " " . ' ' . $mom_lname . '</li>
                                <li>Mother ID: ' . $mom_id . '</li>
                                <li>Age: ' . $mom_age . '</li>
                            </ul>
                            <ul>
                                <li>Date: ' . $app_date . '</li>
                                <li>Location: ' . $app_location . '</li>
                                <li>Number: ' . $p_app_id . '</li>
                                <li>Title: ' . $app_title . '</li>
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
                        <form action="" method="GET">
                            <table>
                                <tr>
                                    <td><label for='phm_id' class="">PHM ID</label></td>
                                    <td><input type='text' name='phm_id' id='phm_id' value='<?php echo $_SESSION['phm_id'] ?>' tabindex="-5" readonly></td>
                                </tr>
                                <tr>
                                    <td><label for='app_id' class="">Appointment ID</label></td>
                                    <td><input type='text' name='app_id' id='app_id' value='<?php
                                        $id_prefix = 'PA';
                                        $max_result = mysqli_query($con, "SELECT MAX(p_app_id) AS max_id FROM phm_appointments");
                                        $row = mysqli_fetch_array($max_result);
                                        $max_id = $row['max_id'];
                                        //extract the last three digits of the highest ID number
                                        $new_id = substr($max_id, -3);
                                        //convert those digits to an integer
                                        $new_id = intval($new_id);
                                        $new_id = $new_id + 1;
                                        //leading zeros to ensure that the resulting ID number is always three digits long with a total string length of 3 and padding with zeros on the left
                                        $id_number = str_pad($new_id, 3, '0', STR_PAD_LEFT);
                                        $id = $id_prefix . $id_number;
                                        echo $id; ?>' readonly tabindex="-5"></td>
                                </tr>
                                <tr>
                                    <td><label for='mom_id' class="">Mother ID</label></td>
                                    <td><select name="mother_id" required>
                                            <option value="">Select a mother</option>
                                            <?php
                                            $ret = mysqli_query($con, "SELECT mom_id FROM `mother_details` WHERE phm_id = '$phm_id'");
                                            while ($row = mysqli_fetch_array($ret)) {
                                            ?>
                                                <option value="<?php echo htmlentities($row['mom_id']); ?>">
                                                    <?php echo htmlentities($row['mom_id']); ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td><label for='app_title' class="contactAdmin">Title</label></td>
                                    <td><input type='text' name='app_title' id='app_title' value='' required></td>
                                </tr>
                                <tr>
                                    <td><label for='app_date' class="contactAdmin">Appointment Date</label></td>
                                    <td><input type='date' name='app_date' id='app_date' value='' min='<?php echo date('Y-m-d', strtotime('+3 days')); ?>' required></td>
                                </tr>
                                <tr>
                                    <td><label for='app_description' class="contactAdmin">Description</label></td>
                                    <td><input type='text' name='app_description' id='app_description' value='' required></td>
                                </tr>
                                <tr>
                                    <td><label for='app_location' class="contactAdmin">Location</label></td>
                                    <td><input type='text' name='app_location' id='app_location' value='' required></td>
                                </tr>
                            </table>
                            <div class="docTypeSubmit">
                                <input type="button" value="Cancel" onclick="closePopup()">
                                <input type="submit" name="SubmitApp" value="Submit">
                            </div>
                        </form>
                        <?php
                        if (isset($_GET['SubmitApp'])) {
                            $id = $_GET['app_id'];
                            $mom_id = $_GET['mother_id'];
                            $title = $_GET['app_title'];
                            $loc = $_GET['app_location'];
                            $des = $_GET['app_description'];
                            $date = $_GET['app_date'];
                            $phm_id = $_GET['phm_id'];
                            // $phm_id = $_GET['phm_id'];
                            // $app_date = $_GET['app_date'];
                            // $user_role = $_GET['doc_type'];
                            // $phm_id = $_SESSION['phm_id'];

                            // switch ($user_role) {
                            //     case 'vog':
                            //     case 'ped':
                            $query = "INSERT INTO phm_appointments (phm_id, p_app_id, mom_id, app_title, app_date, app_description, app_location) VALUES ('$phm_id','$id', '$mom_id', '$title', '$date', '$des', '$loc')";
                            // echo $query;
                            $result = mysqli_query($con, $query);
                            //     break;
                            // case 'phm':
                            //     $query = "INSERT INTO phm_appointments (mom_id, phm_id, start, title, location) VALUES ('$mom_id', '$doc_id', '$date', '$user_role', 'Home')";
                            //     $result = mysqli_query($con, $query);
                            //     break;
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