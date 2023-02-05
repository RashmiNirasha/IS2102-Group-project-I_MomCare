<?php 
//include "../Assets/Includes/header_index.php"; 
include "../Config/dbConnection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style><?php include "../Assets/Css/style-common.css" ?></style>
</head>
<body>
    <div class="RegisterMotherMainDiv">
        <div class="RegisterFormHeading">
            <img src="../Assets/images/common/Project Logo-01.png" alt="Logo">
        </div>
        <div class="RegisterMotherInnerDiv">
            <h2>Register</h2>
            <form class="RegistrationMotherForm" action="mother-register.php" method="POST">
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
                        <td><label for="BOD">BOD</label></td>
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
                        <td><label for="phm_id">PHM ID</label></td>
                        <td><input type="text" name="phm_id" id="phm_id" placeholder="Enter PHM ID"></td>
                    </tr>
                    <tr>
                        <td><label for="user_role"></label></td>
                        <td><input type="hidden" name="user_role" id="user_role" value="mother"></td>
                    </tr>
                </table>
                <button type="submit" name="register">Register</button>
                <button type="cancel" name="cancel">Cancel</button>
                <button type="clear" name="clear" onclick="//clear all fileds">Clear</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php //include "../../Assets/Includes/footer_pages.php"; ?>