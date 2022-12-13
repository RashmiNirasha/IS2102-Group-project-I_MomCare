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
<html lang="en">
<head>
   
    <title>PHM Login </title>

    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">

    <script type="text/javascript">
            function validate() {
                if (document.email.value == "") {
                    alert("Please provide your UserName!");
                    document.email.focus();
                    return false;
                }
                if (document.password.value == "") {
                    alert("Please provide your password!");
                    document.password.focus();
                    return false;
                }
   
   
                return (true);
            }
        </script>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <img src="Assets\Project Logo.png" alt="" class="img" /> </a>
    <nav class="navbar">
        <a href="#home">Help</a>
        <a href="#about">About</a>
    </nav>
</header>

<section class="home" id="home">
    <div class="main">
        <div class="image">
        <img src="<?php echo URLROOT . 'img/Black Illustrated Simple Mental Health Presentation.svg' ?>">
        </div>

  <div class = "main2">
        <div class="form">
            <h1>Welcome to momcare..</h1>

            <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

            <form action="login_ped.php" method="post" id="submit">
                <table class="table-login">
                    <tr>
                        <td><label >Email</label></td>
                        <td><input type="email" name="email" id="email" required></td>
                    </tr>
                    <tr>
                        <td><label >Password</label></td>
                        <td><input type="password" name="password" id="password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="Submit" value="login" onsubmit="return validate()"></a></td>
                    </tr>
<tr>
    <td colspan="2"><p>Don't have an account? <a href="signup.html">sign up</a> </p></td>
            </tr>                
            </form>
        </div> 
    </div>
</div><!--login-form-wrap-->

    <div>
</section>

<!-- home section ends -->

<div class="footer">
            <p>Created by Rashmi Gunawardana | All rights reserved © 2022</p> 
        </div>

</body>
</html>
<!-- home section ends -->
