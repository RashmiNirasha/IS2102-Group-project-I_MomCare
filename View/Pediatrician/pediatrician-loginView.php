<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="javascript" href="/js/validation.js">
    <link rel="stylesheet" href="pediatrician_styleLogin.css">
</head>

<body>

    <div class="login-container">
        <div class="left-box">
            <h1>Welcome to </br> Momcare</h1>
            <img src = "../../Assets/Images/Pediatrician-rafiki.svg">
             
        </div>
        <div class="right-box">
            <h1>Login</h1>
            <form id="loginForm" action="../../Config/ped-loginpModel.php" method="POST">
                <input type="text" name="doc_email" placeholder="Email" required >
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login" onsubmit="return validate()">
            </form>
            <a href="pediatrician-forgotPassView.php">Forgot Password?</a>
            <a href="pediatrician-registerView.php">Don't have an account? Register</a>
        </div>
    </div>
</body>
</html>
