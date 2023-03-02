
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Requests</title>
    <style> <?php include "../../Assets/Css/style-common.css"?></style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>
    <div class="cont-table-1">
        <div class="cont-table-header">
            <h1>Registration Requests</h1>
            <?php
                if (isset($_SESSION['success_message'])) {
                    echo "<div style='color: green; font-weight: bold; margin-bottom: 10px;'>" . $_SESSION['success_message'] . "</div>";
                    unset($_SESSION['success_message']); // clear the message after displaying it
                } elseif (isset($_SESSION['error_message'])) {
                    echo "<div style='color: red; font-weight: bold; margin-bottom: 10px;'>" . $_SESSION['error_message'] . "</div>";
                    unset($_SESSION['error_message']); // clear the message after displaying it
                }
            ?>
            <div class="cont-table-2">
                <table class="registration-requests">
                    <tr>
                        <th>Mother Name</th>
                        <th>Mother Address</th>
                        <th>Mother Telephone No</th>
                        <th>Date of Birth</th>
                        <th>Verification Status</th>
                        <th></th>
                    </tr>
                    <?php
                        require_once '../../Config/dbConnection.php';
                        $sql = "SELECT * FROM registered_user_details where phm_acceptance='accepted' and admin_acceptence='pending'";
                        $result = mysqli_query($con, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                    <td>" . $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'] . "</td>
                                    <td>" . $row['address'] . "</td>
                                    <td>" . $row['tele_number'] . "</td>
                                    <td>" . $row['DOB'] . "</td>
                                    <td>
                                        <form method='post' action='../../Config/admin_update_verification.php'>
                                            <select name='verification-status' id='verification-status'>
                                                <option value='pending' " . (($row['admin_acceptence'] == 'pending') ? 'selected' : '') . ">Pending</option>
                                                <option value='accepted'>Accepted</option>
                                                <option value='rejected'>Rejected</option>
                                            </select>
                                            <input type='hidden' name='reg_user_id' value='" . $row['reg_user_id'] . "'>
                                            <button type='submit'>Update</button>
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



