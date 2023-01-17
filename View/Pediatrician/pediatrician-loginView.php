<?php
session_start(); 

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . " ../../../Config/database.php";
    
    $sql = sprintf("SELECT * FROM doctor_details
                    WHERE doc_email = '%s'",
                   $mysqli->real_escape_string($_POST["doc_email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    //verify email

    if(!filter_var($_POST["doc_email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        echo $emailErr;
    }

    if ($user) {
        
        if (password_verify($_POST["password"], $user["password"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["doc_email"] = $user["doc_email"];
            
            header("Location: pediatrician-dashboardView.php");
            exit;
        }
    }
    
    $is_invalid = true;
}



?>

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
            <h1>Login</h1>
            <form id="loginForm" action=" " method="POST">
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
