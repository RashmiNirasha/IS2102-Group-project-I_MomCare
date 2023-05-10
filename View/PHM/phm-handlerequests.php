<?php 
   session_start();
    include '../../Config/dbConnection.php';
   if (isset($_SESSION['email'])){
    include "../../Assets/Includes/header_pages.php";
    include "../../Config/phm-handlerequestsprocess.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHM-Registration Requests</title>
    <link rel="stylesheet" href="..\..\Assets\css\style-common.css" type="text/css">
    <!-- <link rel="icon" href="..\..\Assets\Images\images-Sachini\logo.png" type="image/icon type"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
    </style>
</head>
<body>
    <div class="a-container">
        <div class="a-content">
            <div class="a-container-n">
            <h1>Registration Requests</h1>
            <?php
                if (isset($_SESSION['success_message'])) {
                    echo "<div class = 'au-nor-message'>" . $_SESSION['success_message'] . "</div>";
                    unset($_SESSION['success_message']); // clear the message after displaying it
                } elseif (isset($_SESSION['error_message'])) {
                    echo "<div class = 'au-imp-message'>" . $_SESSION['error_message'] . "</div>";
                    unset($_SESSION['error_message']); // clear the message after displaying it
                }
            ?>
            <div class="a-container-m">
            <!-- <div class="a-dropdown"><div class="a-manage-icon"><i class="material-icons" alt="manage accounts">manage_accounts</i>
        </div>
        <div class="au-dropdown-content">
                <a href="..\..\View\Admin\admin-managemother.php">Manage Mother Accounts</a>
                <a href="..\..\View\Admin\admin-managedoctor.php">Manage Doctor Accounts</a>
                <a href="..\..\View\Admin\admin-managephm.php">Manage PHM Accounts</a>
                </div>
        </div> -->
            <a href = "admin-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
            </div></div>
            <div class="hr-table"> 
                <table>
                    <tr><div class="upper-area"></div></tr>
                    <tr>
                        <th>Mother Name</th>
                        <th>Mother Address</th>
                        <th>Mother Telephone No</th>
                        <th>Date of Birth</th>
                        <th>Verification Status</th>
                    </tr>
                    <?php
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                    <td>" . $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'] . "</td>
                                    <td>" . $row['address'] . "</td>
                                    <td>" . $row['tele_number'] . "</td>
                                    <td>" . $row['DOB'] . "</td>
                                    <td>
                                        <form method='post' action='../../Config/phm-updateverification.php'>
                                            <select name='verification-status' id='verification-status'>
                                                <option value='pending' " . (($row['phm_acceptance'] == 'pending') ? 'selected' : '') . ">Pending</option>
                                                <option value='accepted'>Accepted</option>
                                                <option value='rejected'>Rejected</option>
                                            </select>
                                            <input type='hidden' name='reg_user_id' value='" . $row['reg_user_id'] . "'>
                                            <button class = 'hr-button' type='submit'>Update</button>
                                        </form>
                                    </td>
                                </tr>";
                            } 
                        } else {
                            echo "<tr><td colspan='6'>No pending verification requests found.</td></tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php
}else{
    header("Location:admin-login.php");
}

?>

