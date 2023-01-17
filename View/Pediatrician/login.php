<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "\control\database.php";
    
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
    
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<header class="header">

        <a href="#" class="logo"> <img src="Assets\Project Logo.png" alt="" class="img" /> </a>
        <nav class="navbar">
            <a href="#home">Help</a>
            <a href="index.php">About</a>
        </nav>
    </header>

<!-- login form container -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form" method="Post" action="login.php">
  <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    <p>
    <input type="email" id="email" name="email" placeholder="Enter email address" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" required id="password" name="password" placeholder="Enter Password" required></p>
    <p>
    <input type="submit" id="login" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not a member? <a href="#">Create Account</a><p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- login -->

</body>
</html>








