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
                <a href = "phm-notification.php"><i class="material-icons" alt="notification icon">notifications</i></a>
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