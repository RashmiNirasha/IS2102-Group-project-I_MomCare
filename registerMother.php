<?php //include "../../Assets/Includes/header_pages.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style><?php include "Assets/css/style-common.css" ?></style>
</head>
<body>
    <div class="RegisterMotherMainDiv">
        <img src="Assets/Images/common/Project Logo-01.png" alt="Logo">
        <h1>Welcome to MOM CARE</h1>
        <div class="RegisterMotherInnerDiv">
            <h2>Register</h2>
            <form class="RegistrationMotherForm" action="registerMother.php" method="POST">
                <table>
                    <tr>
                        <td><label for="name">First name</label></td>
                        <td><input type="text" name="name" id="name" placeholder="Enter your first name" required></td>
                    </tr>
                    <tr>
                        <td><label for="surname">Middle name(s)</label></td>
                        <td><input type="text" name="surname" id="surname" placeholder="Enter your middle name(s)" required></td>
                    </tr>
                    <tr>
                        <td><label for="surname">Surname</label></td>
                        <td><input type="text" name="surname" id="surname" placeholder="Enter your surname" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" name="email" id="email" placeholder="Enter your email" required></td>
                    </tr>
                    <tr>
                        <td><label for="age">Age</label></td>
                        <td><input type="number" name="age" id="age" placeholder="Enter your age" required></td>
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
                        <td><label for="mobile">Mobile number</label></td>
                        <td><input type="tel" name="mobile" id="mobile" placeholder="Enter your mobile number" required></td>
                    </tr>
                    <tr>
                        <td><label for="phm_id">PHM ID</label></td>
                        <td><input type="text" name="phm_id" id="phm_id" placeholder="Enter PHM ID"></td>
                    </tr>
                </table>
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>

<?php //include "../../Assets/Includes/footer_pages.php"; ?>