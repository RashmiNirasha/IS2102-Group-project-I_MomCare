<?php
    include("../../Config/mother-signup.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother SignUP</title>
    <link rel="stylesheet" href="../../Assets/css/mother-login.css">
</head>
<body>
    <div class="logo">
        <img src="../../Assets/Images/Project Logo-01.png" alt="logo">
    </div>
    <h1 class="signup-heading">Welcome to Mom Care</h1>
    <div class="signup">
        <h2>Register</h2>
        <div class="register-form">
            <form action="../../Config/mother-signup.inc.php" method="POST">
                <table class="reg-details">
                    <tr>
                    <td><label for="mother-name">First Name</label></td> 
                    <td>
                        <div class="input-fields">
                            <input type="text" name="mother-fname" placeholder="">
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td><label for="mother-name">Middle Name</label></td> 
                    <td>
                        <div class="input-fields">
                            <input type="text" name="mother-mname" placeholder="">
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td><label for="mother-name">Last Name</label></td> 
                    <td>
                        <div class="input-fields">
                            <input type="text" name="mother-lname" placeholder="">
                        </div>
                    </td>
                    </tr>
                    <tr>
                        <td><label for="mother-age">Age</label></td>
                        <td>
                            <div class="input-fields">
                                <input type="text" name="mother-age" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="mother-address">Address</Address></label></td>
                        <td>
                            <div class="input-fields">
                                <input type="text" name="mother-address" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="mother-address">DOB</Address></label></td>
                        <td>
                            <div class="input-fields">
                                <input type="text" name="mother-dob" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="phm-id">PHM ID</label></td>
                        <td>
                            <div class="input-fields">
                                <input type="text" name="phm-id" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="mother-email">Email</label></td>
                        <td>
                            <div class="input-fields">
                                <input type="text" name="mother-email" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="mother-phone">Phone Number</label></td>
                        <td>
                            <div class="input-fields">
                                <input type="text" name="mother-phone" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <!-- Password just for interim -->
                    <tr>
                        <td><label for="mother-password">Password</label></td>
                        <td>
                            <div class="input-fields">
                                <input type="password" name="mother-password" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="mother-cpassword">Confirm Password</label></td>
                        <td>
                            <div class="input-fields">
                                <input type="password" name="mother-cpassword" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="btn">
                                <input type="submit" value="Register" name="btn-reg">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>