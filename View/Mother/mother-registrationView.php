<?php 
include "../../Config/dbConnection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style><?php include "../../Assets/Css/style-common.css" ?></style>
</head>
<body>
    <div class="RegisterMotherMainDiv">
        <div class="RegisterFormHeading">
            <img src="../../Assets/images/common/Project Logo-01.png" alt="Logo">
        </div>
        <div class="RegisterMotherInnerDiv">
            <form class="RegistrationMotherForm" id="RegistrationMotherForm" action="../../Config/mother-registrationModel.php" method="POST">
                <div class="box-shadow">
                <h3>Register</h3>
                <table>
                    <tr>
                        <td><label for="name">First name</label></td>
                        <td><input type="text" name="fname" id="fname" placeholder="Enter your first name" required></td>
                    </tr>
                    <tr>
                        <td><label for="surname">Middle name(s)</label></td>
                        <td><input type="text" name="mname" id="mname" placeholder="Enter your middle name(s)"></td>
                    </tr>
                    <tr>
                        <td><label for="surname">Surname</label></td>
                        <td><input type="text" name="sname" id="sname" placeholder="Enter your surname" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" name="email" id="email" placeholder="Enter your email" required></td>
                    </tr>
                    <tr>
                        <td><label for="BOD">Date of Birth</label></td>
                        <td><input type="date" name="BOD" id="BOD" placeholder="Enter your birthday" required></td>
                    </tr>
                    <tr>
                        <td><label for="address">Address</label></td>
                        <td><input type="text" name="address" id="address" placeholder="Enter your address" required></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Telephone number</label></td>
                        <td><input type="tel" name="tele" id="tele" placeholder="Enter your telephone number" required></td>
                    </tr>
                    <tr>
                        <td><label for="phm_id">PHM ID(Public Health Midwife)</label></td>
                        <!-- Select from a drop down -->
                        <td><select id="phm_id" name="phm_id" required>
                        <option value="">Select a PHM</option>
                        <?php
                        $ret = mysqli_query($con, "SELECT * FROM `phm_details`");
                        while($row = mysqli_fetch_array($ret)) {
                        ?>
                        <option value="<?php echo htmlentities($row['phm_id']);?>">
                            <?php echo htmlentities($row['phm_id']);?>
                        </option>
                        <?php
                        }
                        ?>
                    </select><br>
                        <!-- <td><input type="text" name="phm_id" id="phm_id" placeholder="Enter PHM ID"></td> -->
                    </tr>
                    <tr>
                        <td><label for="user_role"></label></td>
                        <td><input type="hidden" name="user_role" id="user_role" value="mother"></td>
                    </tr>
                </table>
                </div>
                <button type="submit" name="register">Register</button>
                <button type="cancel" name="cancel" onclick="window.location='../../index.php'">Cancel</button>
                <button type="clear" name="clear" onclick="clearForm()">Clear</button>
                <script>
                    function clearForm() {
                        document.getElementById("RegistrationMotherForm").reset();
                    }
                </script>
            </form>
        </div>
    </div>
</body>
</html>

<?php //include "../../Assets/Includes/footer_pages.php"; ?>