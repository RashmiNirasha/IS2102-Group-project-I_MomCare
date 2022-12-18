<?php  
    include_once '../../Config/mother-login.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Mother</title>
    
    <link rel="stylesheet" href="../../Assets/css/mother-login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="logo">
        <img src="../../Assets/Images/Project Logo-01.png" alt="logo">
    </div>
    <div class="bg-image">
        <img src="../../Assets/Images/login-bg.jpg" alt="">
    </div>
    <h1 class="heading">Hello there!</h1>
    <div class="vline"></div>
    <div class="login">
        <h2>Sign In</h2>
        <div class="login-form">
            <form action="../../Config/mother-login.inc.php" method="POST">
                <table class="login-details">
                    <tr>
                        <td><label for="mother-username">Email</label></td>
                        <td>
                            <div class="input-fields">
                                <input type="text" name="mother-email" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="mother-password">Password</label></td>
                        <td>
                            <div class="input-fields">
                                <input type="password" name="mother-password" placeholder="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="forgot-pass"><a href="">Forgot Password</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="btn">
                                <input type="submit" value="Sign In" name="btn-login">
                                <input type="button" value="Back">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>