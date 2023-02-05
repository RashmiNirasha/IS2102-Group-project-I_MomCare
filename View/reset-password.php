

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include "Assets/css/style-common.css" ?></style>
</head>
<body>
<div class="Reset password">
    <h3>Reset Password</h3>
    <div class="reset-container">   
        <h1>jbguftzzAF</h1>

<form action="reset.php" method="POST">
    <table>
        <tr>
            <td><label for="password">OTP</label></td>
            <td><input type="password" name="otp" id="otp" placeholder="Enter your one time password" required></td>
        </tr>
        <tr>
            <td><label for="confirmPassword">New Password</label></td>
            <td><input type="password" name="newPassword" id="newPassword" placeholder="Confirm your password" required></td>
        </tr>
        <tr>
            <td><label for="confirmPassword">Confirm Password</label></td>
            <td><input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your password" required></td>
        <tr>
            <td><button type="submit" name="reset-password" class="login-btn">Submit</button></td>
        </tr>
</table>
</body>
</html>
