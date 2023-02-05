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
            <h1>Register</h1>
            <form id="Register" action="../../Config/ped-signupModel.php" method="POST">
                <div class="input-syler" style="margin-left: 40px;">
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
                <input type="text" name="address" id="address" placeholder="Enter your address" required>
                <input type="date" name="dob" id="dob" placeholder="Enter your date of birth" required>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required>
                <input type="text" name="worlplace" id="worlplace" placeholder="Enter your worlplace" required>
                <input type="text" name="designation" id="designation" placeholder="Enter your designation" required>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                <input type="password" name="password2" id="password2" placeholder="Confirm your password" required>
                </div>
                <input type="submit" value="Register" onsubmit="return emailValidate()">
            </form>
       
            <a href="pediatrician-loginView.php">Login</a>
        </div>
    </div>
</body>
</html>