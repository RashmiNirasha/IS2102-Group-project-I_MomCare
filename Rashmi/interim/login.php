<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: dashboard.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css\nav.css">
    <link rel="stylesheet" href="css\login.css">
</head>
<body>
<header class="header">

        <a href="#" class="logo"> <img src="Project Logo.png" alt="" class="img" /> </a>
        <nav class="navbar">
            <a href="#home">Help</a>
            <a href="index.php">About</a>
        </nav>
    </header>

    <div class="container3">
        <div class="form">
            <h1>Login</h1>

            <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

            <form action="login.php" method="post">
                <div class="inputBox">
                    <input type="email" id="email" name="email">
                    <label>email</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required id="password">
                    <label>Password</label>
                </div>
                <input type="submit" value="Login">
                <p>Don't have an account? <a href="signup.html">Sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>








