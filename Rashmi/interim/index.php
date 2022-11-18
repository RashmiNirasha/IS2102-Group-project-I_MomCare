<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="css\body.css">
    <link rel="stylesheet" href="css\nav.css">
</head>
<body>
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <img src="Project Logo.png" alt="" class="img" /> </a>
    <nav class="navbar">
        <a href="#home">Help</a>
        <a href="index.php">About</a>
    </nav>
</header>

<div class="container">
<h1>Home</h1>
<div class="content">
                <h3>What is MomCare?</h3>
                <p>MomCare is a platform that helps mothers and medical personals to connect with each other and keep medical records in one place. It also helps mothers to access their mother card and child card easily anytime and from anywhere. </p>
                <a href="#" class="btn">Read More</a>
            </div>

    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>

    </div>
    </div>
</body>
<footer>
    <div class="box-container">
        <div class="credit"> Created by <span>Rashmi Gunawardana</span> | all rights reserved </div>
    </div>
    </footer>
</html>
    
    
    
    
    
    
    
    
    
    
    