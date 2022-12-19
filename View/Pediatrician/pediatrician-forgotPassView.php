<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="javascript" href="/js/validation.js">
    <link rel="stylesheet" href="../../Assets/css/pediatrician_styleLogin.css">
</head>

<body>
    <div class="login-container">
        <div class="left-box">
            <h1>Welcome to </br> Momcare</h1>
            <img src = "../../Assets/Images/Pediatrician-rafiki.svg">
            
        </div>
        <div class="right-box">
            <h1>Reset Passsword</h1>
            <form id="Reset" action=" " method="POST">
                <input type="text" name="doc_email" placeholder="Email" required >
                <input type="password" name="password" placeholder="New Password" required>
                <input type="password" name="password" placeholder="Confirm Password" required>
                <input type="submit" value="Reset" onsubmit="return validate()">
            </form>
            <a href="pediatrician-loginView.php">Login</a>
        </div>
    </div>
</body>
</html>